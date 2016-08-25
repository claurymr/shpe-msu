/**
 * Created by Sakura on 8/23/2016.
 */
$(document).ready(function(){
    var onSocialMediaHover = function(){
        $(".facebook").mouseover(function(){
            /*$(this).attr("src", "https://christiannarvios.files.wordpress.com/2016/07/facebook-e1470009019796.png");*/
            $(this).attr("src", "assets/img/facebook-color-icon.svg");
        }).mouseout(function(){
            $(this).attr("src", "assets/img/facebook-icon.svg");
        });

        $(".instagram").mouseover(function(){
            $(this).attr("src", "https://christiannarvios.files.wordpress.com/2016/07/white_instagram.png");
        }).mouseout(function(){
            $(this).attr("src", "assets/img/instagram-icon.svg");
        });
    };

    onSocialMediaHover();

});