function test() {
        image_Element = document.getElementsByClassName('image');
        setTimeout(function() {for(var i = 0; i < image_Element.length; i++){               

                window_Height = window.innerHeight;
                window_Width = window.innerWidth;
                
                
                image_Height = image_Element[i].clientHeight;
                image_Width = image_Element[i].clientWidth;
                
                availSpace_V = window_Height - image_Height;
                availSpace_H = window_Width - image_Width;
                
                var randNum_V = Math.round(Math.random() * availSpace_V);
                var randNum_H = Math.round(Math.random() * availSpace_H);

                
                image_Element[i].style.bottom = randNum_V + "px";
                image_Element[i].style.left = randNum_H + "px";

}}, 100);
}
test()