<?php
/**
 * @Project:     Scratch Card
 * @Copyright:   Copyright (c) Danish Sheraz,
 * @Senior-Developer: Danish Sheraz
 **/
// date time helpers
use App\Models\Category;
use App\Models\MarchaDoneRequest;
use App\Models\MarchaRequest;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

if (!function_exists('get_date_time')) {
    function get_date_time()
    {
        $tz_object = new DateTimeZone('Asia/Karachi');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d\ H:i:s');
    }
}
// date helper
if (!function_exists('get_date')) {
    function get_date()
    {
        $tz_object = new DateTimeZone('Asia/Karachi');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d');
    }
}
// date time helpers
if (!function_exists('get_time')) {
    function get_time()
    {
        $tz_object = new DateTimeZone('Asia/Karachi');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('H:i:s');
    }
}
// date time helpers
if (!function_exists('parse_datetime_get')) {
    function parse_datetime_get($date)
    {
        $datetime = new DateTime($date);
        return $datetime->format('d-m-Y g:i A');
    }
}
// parse date to for db
if (!function_exists('parse_date_store')) {
    function parse_date_store($date)
    {
        return date('Y-m-d', strtotime($date));
    }
}
// parse date to for get
if (!function_exists('parse_date_get')) {
    function parse_date_get($date)
    {
        return date('d-m-Y', strtotime($date));
    }
}
// encrypt password
if (!function_exists('encrypt_password')) {
    function encrypt_password($password)
    {
        return sha1(md5($password.'Looper$alt'));
    }
}
// slugify
if (!function_exists('slugify')) {
    function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, $divider);
        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
// Base URL Paths
if (!function_exists('get_base_url_for_images')) {
    function get_base_url_for_images()
    {
        return "http://172.24.7.240/m2/public/product_images/";
//        return "https://www.marchamarlo.com/product_images/";
    }
}
if (!function_exists('get_base_url_for_attachments')) {
    function get_base_url_for_attachments()
    {
        return "http://dev.atlantisbpo.local/m2/public/chat_attachments/";
//        return "https://www.marchamarlo.com/chat_attachments/";
    }
}
if (!function_exists('get_base_url_for_user')) {
    function get_base_url_for_user()
    {
        return "http://172.24.7.240/m2/public/user_images";
//        return "https://www.marchamarlo.com/user_images/";
    }
}
// Add notification
if (!function_exists('add_notification')) {
    function add_notification($notification_text, $notification_type, $reference_id, $user_id)
    {
        \App\Models\Notification::create([
            'message' => $notification_text,
            'type' => $notification_type,
            'reference_id' => $reference_id,
            'user_id' => $user_id
        ]);
    }
}

if (!function_exists('send_email')) {
    function send_email($email_body, $email_address, $subject)
    {
        $em = "noreply@gc-solar.com";
        $na = "GC Solar.com";
        $from = $na . "<" . $em . ">";
        $xheaders = 'MIME-Version: 1.0' . "\r\n";
        $xheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $xheaders .= 'X-Priority: 1' . "\r\n";
        $xheaders .= "From: " . $from . "\r\n";
        $xheaders .= "Reply-To: " . $from . "\r\n";
        $xheaders .= "Return-Path: " . $from . "\r\n";
        @mail($email_address, $subject, $email_body, $xheaders);

    }
}
// random Color Classes
if (!function_exists('random_color_classes')) {
    function random_color_classes()
    {
        return $RandomCol=[
            'orange_li' =>'orange_li',
            'grey_li'=>'grey_li',
            'blue_li'=>'grey_li'
        ];
    }
}

//get notification
if (!function_exists('get_notifications')) {

    function get_notifications()
    {
        if(Auth::user()) {
            $user_id = Auth::user()->user_id;
        } else {
            $user_id = 0;
        }
        $notifications = Notification::where(['status'=>1, 'user_id'=>$user_id])->orderBy('notification_id','desc')->get();
        $notifications_count= Notification::where([
            ['user_id', '=', $user_id],
            ['read', '=', 0],
        ])->get()->count();
        foreach ($notifications as $key=>$value){
            if($value->type==="New marcha request" || $value->type==="Marcha request accepted"
                || $value->type==="Marcha request rejected") {

                $notifications[$key]->marcha_request = MarchaRequest::select("*", DB::raw("'".get_base_url_for_images()."' as product_images_base_url"))->where([
                    'request_id' => $value->reference_id
                ])->with(['requested_product', 'requester_product', 'added_by_user'])->first();


            } else if($value->type==="New marcha done request" || $value->type==="Marcha done accepted"
                || $value->type==="Marcha done rejected") {
                $notifications[$key]->marcha_request = MarchaDoneRequest::select("*", DB::raw("'".get_base_url_for_images()."' as product_images_base_url"))->where([
                    'request_id' => $value->reference_id
                ])->with(['requested_product', 'requester_product', 'added_by_user'])->first();
            }
        }
        $data['count'] = $notifications_count;
        $data['noti'] = $notifications;
        return $data;
    }
}

//sidebar categories
if (!function_exists('sidebar_categories')) {
    function sidebar_categories()
    {
        $categories = Category::where(['status'=> 1,'featured'=>1])->orderBy('category_id', 'desc')->take(9)->get();
        return $categories;
    }
}
if (!function_exists('header_categories')) {
    function header_categories()
    {
        $categories = Category::where(['status'=> 1,'featured'=>1])->orderBy('category_id', 'desc')->take(8)->get();
        return $categories;
    }
}
if (!function_exists('get_unread_counts')) {
    function get_unread_counts()
    {
        return DB::select(DB::raw("SELECT count(*) as count FROM `chats` c INNER JOIN products p ON p.product_id=c.to_product_id INNER JOIN users u ON u.user_id = p.added_by WHERE c.is_read=0 AND u.user_id=".Auth::user()->user_id))[0]->count;
    }
}

if (!function_exists('profile_counter')) {
    function profile_counter()
    {
        $user_id = Auth::user()->user_id;
        $data['total_products'] =  Product::where('added_by',Auth::user()->user_id)->whereIn('status',[1,2])->count();
        $data['marcha_recived'] = MarchaRequest::whereHas('requested_product', function ($query) use($user_id) {
            return $query->where('added_by', $user_id);
        })->where('status',1)->count();
        $data['marcha_send'] = MarchaRequest::where([
            'status' => 1,
            'added_by' => $user_id
        ])->count();
        $data['marcha_accepted'] = MarchaRequest::orWhere(["added_by" =>$user_id ,"accepted_by" => $user_id])->where("status", 2)->count();

        $data['marcha_done'] = MarchaDoneRequest::where(function ($q) use ($user_id){
            $q->where('added_by',$user_id)->orwhere('accepted_by',$user_id);
        })->where("status", 2)->count();
        return $data;
    }
}


//Check profile is Complete or not
if (!function_exists('profile_completed')) {
    function profile_completed($user_id)
    {
        $user = User::where('user_id',$user_id)->get()->first();
        if($user->city != null && $user->contact_number != null){
            return true;
        }else{
            return false;
        }
    }
}
if (!function_exists('settings')) {
    function settings()
    {
        $settings = Settings::where('setting_id',1)->get()->first();
            return $settings;
    }
}

/* End of file custom_helpers.php */
/* Location: ./application/helpers/custom_helpers.php */
