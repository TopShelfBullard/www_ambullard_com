function getNewQuoteForHeader(){var e,t,n=$("#quote5"),r;n.css("display","none");e=Math.floor(Math.random()*24+1);r="#quote"+e;t=$(r);t.fadeIn(1e3).delay(2e4).fadeOut(1e3,function(){getNewQuoteForHeader()})}function hoverEffect(e,t,n){e.hover(function(){t.css("display","none");n.css("display","inline")},function(){n.css("display","none");t.css("display","inline")})}function starAnimation(){$(".glyphicon-star").hover(function(){$(this).addClass("star_hover");$(this).prevUntil(".stars").addClass("star_hover")},function(){$(this).removeClass("star_hover");$(this).prevUntil(".stars").removeClass("star_hover")})}$(document).ready(function(){getNewQuoteForHeader();var e=$("#facebook"),t=$(".facebook_bw"),n=$(".facebook_color"),r=$("#github"),i=$(".github_bw"),s=$(".github_color"),o=$("#googleplus"),u=$(".googleplus_bw"),a=$(".googleplus_color"),f=$("#linkedin"),l=$(".linkedin_bw"),c=$(".linkedin_color"),h=$("#mail"),p=$(".mail_bw"),d=$(".mail_color"),v=$("#twitter"),m=$(".twitter_bw"),g=$(".twitter_color");hoverEffect(e,t,n);hoverEffect(r,i,s);hoverEffect(o,u,a);hoverEffect(f,l,c);hoverEffect(h,p,d);hoverEffect(v,m,g);starAnimation()});