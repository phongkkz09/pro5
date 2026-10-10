<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu <www.facebok.com/wusthanhdieu>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "NgThPhg";
    public $description = "Hi my name is Phong / A student / talk less / chill";
    public $keywords = "ngthphg,web phong,nguyen the phong,p5 phong,pro5 phong,p5 phg,pro5 phg,phong,phong home,profile phong";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "PHONG | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is Phong.", "I really like chill music 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đam mê công nghệ số";
    public $bio2 = "🔍 Thích đồ chơi";
    public $bio3 = "🍭 Thích đồ ngọt";
    public $bio4 = "Kẻ khờ dại✨";
    public $bio5 = "Ăn, ngủ, học và chơi game 🎮";
    public $bio6 = "Thích đi chơi 🥳";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/ngthphg", // Thay link facebook
        "instagram" => "https://www.instagram.com/ngthphggg", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/", // Thay link tiktok
        "telegram" => "https://web.telegram.org/a/#6781751673" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Phong", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "...?", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "01/01/2025" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/3ylyrq.mp3",
            "avatar" => "https://files.catbox.moe/u0c81j.jpg",
            "title" => "Take me hand",
            "author" => "🎐"
        ],
        
        [
            "url" => "https://files.catbox.moe/3g75r2.mp3",
            "avatar" => "https://files.catbox.moe/ggwgze.jpg",
            "title" => "Alone x Never be Alone",
            "author" => "🎐"
        ],
        
        [
            "url" => "https://files.catbox.moe/5sja38.mp3",
            "avatar" => "https://files.catbox.moe/u259l9.jpg",
            "title" => "Lanterns Remix",
            "author" => "🎐"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
