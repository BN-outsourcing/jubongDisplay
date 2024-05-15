/* led01 sequence */

ScrollTrigger.matchMedia({
    '(min-width: 821px)' : function() {
        // 이미지 시퀀스
        function sequence_animation() {
            const canvas = document.querySelector("#product1");
            const context = canvas.getContext("2d");
            
            window.addEventListener("resize", function () {
                render();
            });
            
            function files(index){
                var data = `
                    /asset/image/sub/product/led1/led01_1.gif
                    /asset/image/sub/product/led1/led01_2.gif
                    /asset/image/sub/product/led1/led01_3.gif
                    /asset/image/sub/product/led1/led01_4.gif
                    /asset/image/sub/product/led1/led01_5.gif
                    /asset/image/sub/product/led1/led01_6.gif
                    /asset/image/sub/product/led1/led01_7.gif
                    /asset/image/sub/product/led1/led01_8.gif
                    /asset/image/sub/product/led1/led01_9.gif
                    /asset/image/sub/product/led1/led01_10.gif
                    /asset/image/sub/product/led1/led01_11.gif
                    /asset/image/sub/product/led1/led01_12.gif
                    /asset/image/sub/product/led1/led01_13.gif
                    /asset/image/sub/product/led1/led01_14.gif
                    /asset/image/sub/product/led1/led01_15.gif
                    /asset/image/sub/product/led1/led01_16.gif
                    /asset/image/sub/product/led1/led01_17.gif
                    /asset/image/sub/product/led1/led01_18.gif
                    /asset/image/sub/product/led1/led01_19.gif
                    /asset/image/sub/product/led1/led01_20.gif
                    /asset/image/sub/product/led1/led01_21.gif
                    /asset/image/sub/product/led1/led01_22.gif
                    /asset/image/sub/product/led1/led01_23.gif
                    /asset/image/sub/product/led1/led01_24.gif
                    /asset/image/sub/product/led1/led01_25.gif
                    /asset/image/sub/product/led1/led01_26.gif
                    /asset/image/sub/product/led1/led01_27.gif
                    /asset/image/sub/product/led1/led01_28.gif
                    /asset/image/sub/product/led1/led01_29.gif
                    /asset/image/sub/product/led1/led01_30.gif
                    /asset/image/sub/product/led1/led01_31.gif
                    /asset/image/sub/product/led1/led01_32.gif
                    /asset/image/sub/product/led1/led01_33.gif
                    /asset/image/sub/product/led1/led01_34.gif
                    /asset/image/sub/product/led1/led01_35.gif
                    /asset/image/sub/product/led1/led01_36.gif
                    /asset/image/sub/product/led1/led01_37.gif
                    /asset/image/sub/product/led1/led01_38.gif
                    /asset/image/sub/product/led1/led01_39.gif
                    /asset/image/sub/product/led1/led01_40.gif
                    /asset/image/sub/product/led1/led01_41.gif
                    /asset/image/sub/product/led1/led01_42.gif
                    /asset/image/sub/product/led1/led01_43.gif
                    /asset/image/sub/product/led1/led01_44.gif
                    /asset/image/sub/product/led1/led01_45.gif
                    /asset/image/sub/product/led1/led01_46.gif
                    /asset/image/sub/product/led1/led01_47.gif
                    /asset/image/sub/product/led1/led01_48.gif
                    /asset/image/sub/product/led1/led01_49.gif
                    /asset/image/sub/product/led1/led01_50.gif
                    /asset/image/sub/product/led1/led01_51.gif
                    /asset/image/sub/product/led1/led01_52.gif
                    /asset/image/sub/product/led1/led01_53.gif
                    /asset/image/sub/product/led1/led01_54.gif
                    /asset/image/sub/product/led1/led01_55.gif
                    /asset/image/sub/product/led1/led01_56.gif
                    /asset/image/sub/product/led1/led01_57.gif
                    /asset/image/sub/product/led1/led01_58.gif
                    /asset/image/sub/product/led1/led01_59.gif
                    /asset/image/sub/product/led1/led01_60.gif
                    /asset/image/sub/product/led1/led01_61.gif
                    /asset/image/sub/product/led1/led01_62.gif
                    /asset/image/sub/product/led1/led01_63.gif
                    /asset/image/sub/product/led1/led01_64.gif
                    /asset/image/sub/product/led1/led01_65.gif
                    /asset/image/sub/product/led1/led01_66.gif
                    /asset/image/sub/product/led1/led01_67.gif
                    /asset/image/sub/product/led1/led01_68.gif
                    /asset/image/sub/product/led1/led01_69.gif
                    /asset/image/sub/product/led1/led01_70.gif
                    /asset/image/sub/product/led1/led01_71.gif
                    /asset/image/sub/product/led1/led01_72.gif
                    /asset/image/sub/product/led1/led01_73.gif
                    /asset/image/sub/product/led1/led01_74.gif
                    /asset/image/sub/product/led1/led01_75.gif
                    /asset/image/sub/product/led1/led01_76.gif
                    /asset/image/sub/product/led1/led01_77.gif
                    /asset/image/sub/product/led1/led01_78.gif
                    /asset/image/sub/product/led1/led01_79.gif
                    /asset/image/sub/product/led1/led01_80.gif
                    /asset/image/sub/product/led1/led01_81.gif
                    /asset/image/sub/product/led1/led01_82.gif
                    /asset/image/sub/product/led1/led01_83.gif
                    /asset/image/sub/product/led1/led01_84.gif
                    /asset/image/sub/product/led1/led01_85.gif
                    /asset/image/sub/product/led1/led01_86.gif
                    /asset/image/sub/product/led1/led01_87.gif
                    /asset/image/sub/product/led1/led01_88.gif
                    /asset/image/sub/product/led1/led01_89.gif
                    /asset/image/sub/product/led1/led01_90.gif
                `;
            
                return data.split('\n')[index];
            }
            
            
            const frameCount = 90;
            
            const images = [];
            const imageSeq = {
                frame: 0,
            };
            
            for(let i = 1; i <= frameCount; i++){
                const img = new Image();
                img.src = files(i);
                images.push(img);
            }
            
            gsap.to(imageSeq, {
                frame: frameCount - 1,
                snap: 'frame',
                ease: 'none',
                scrollTrigger: {
                    scrub: 0.000001,
                    pin: true,
                    // markers: true,
                    trigger: '.pbx._1',
                    start: "top top",
                    end: "bottom top",
                },
                onUpdate: render,
            });
            
            images[0].onLoad = render;

            
            function render() {
                scaleImage(images[imageSeq.frame], context);
            }
            
            function scaleImage(img, ctx){
                var canvas = ctx.canvas;
                var hRatio = canvas.width / img.width;
                var vRatio = canvas.height / img.height;
                var ratio = Math.max(hRatio, vRatio);
                var centerShift_x = (canvas.width - img.width * ratio) / 2;
                var centerShift_y = (canvas.height - img.height * ratio) / 2;
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(
                    img,
                    0,
                    0,
                    img.width,
                    img.height,
                    centerShift_x,
                    centerShift_y,
                    img.width * ratio,
                    img.height * ratio
                );
                
            }
        }

        sequence_animation();
    }
});


/* led02 sequence */

ScrollTrigger.matchMedia({
    '(min-width: 821px)' : function() {
        // 이미지 시퀀스
        function sequence_animation() {
            const canvas = document.querySelector("#product2");
            const context = canvas.getContext("2d");
            
            window.addEventListener("resize", function () {
                render();
            });
            
            function files(index){
                var data = `
                    /asset/image/sub/product/led1/led01_1.gif
                    /asset/image/sub/product/led1/led01_2.gif
                    /asset/image/sub/product/led1/led01_3.gif
                    /asset/image/sub/product/led1/led01_4.gif
                    /asset/image/sub/product/led1/led01_5.gif
                    /asset/image/sub/product/led1/led01_6.gif
                    /asset/image/sub/product/led1/led01_7.gif
                    /asset/image/sub/product/led1/led01_8.gif
                    /asset/image/sub/product/led1/led01_9.gif
                    /asset/image/sub/product/led1/led01_10.gif
                    /asset/image/sub/product/led1/led01_11.gif
                    /asset/image/sub/product/led1/led01_12.gif
                    /asset/image/sub/product/led1/led01_13.gif
                    /asset/image/sub/product/led1/led01_14.gif
                    /asset/image/sub/product/led1/led01_15.gif
                    /asset/image/sub/product/led1/led01_16.gif
                    /asset/image/sub/product/led1/led01_17.gif
                    /asset/image/sub/product/led1/led01_18.gif
                    /asset/image/sub/product/led1/led01_19.gif
                    /asset/image/sub/product/led1/led01_20.gif
                    /asset/image/sub/product/led1/led01_21.gif
                    /asset/image/sub/product/led1/led01_22.gif
                    /asset/image/sub/product/led1/led01_23.gif
                    /asset/image/sub/product/led1/led01_24.gif
                    /asset/image/sub/product/led1/led01_25.gif
                    /asset/image/sub/product/led1/led01_26.gif
                    /asset/image/sub/product/led1/led01_27.gif
                    /asset/image/sub/product/led1/led01_28.gif
                    /asset/image/sub/product/led1/led01_29.gif
                    /asset/image/sub/product/led1/led01_30.gif
                    /asset/image/sub/product/led1/led01_31.gif
                    /asset/image/sub/product/led1/led01_32.gif
                    /asset/image/sub/product/led1/led01_33.gif
                    /asset/image/sub/product/led1/led01_34.gif
                    /asset/image/sub/product/led1/led01_35.gif
                    /asset/image/sub/product/led1/led01_36.gif
                    /asset/image/sub/product/led1/led01_37.gif
                    /asset/image/sub/product/led1/led01_38.gif
                    /asset/image/sub/product/led1/led01_39.gif
                    /asset/image/sub/product/led1/led01_40.gif
                    /asset/image/sub/product/led1/led01_41.gif
                    /asset/image/sub/product/led1/led01_42.gif
                    /asset/image/sub/product/led1/led01_43.gif
                    /asset/image/sub/product/led1/led01_44.gif
                    /asset/image/sub/product/led1/led01_45.gif
                    /asset/image/sub/product/led1/led01_46.gif
                    /asset/image/sub/product/led1/led01_47.gif
                    /asset/image/sub/product/led1/led01_48.gif
                    /asset/image/sub/product/led1/led01_49.gif
                    /asset/image/sub/product/led1/led01_50.gif
                    /asset/image/sub/product/led1/led01_51.gif
                    /asset/image/sub/product/led1/led01_52.gif
                    /asset/image/sub/product/led1/led01_53.gif
                    /asset/image/sub/product/led1/led01_54.gif
                    /asset/image/sub/product/led1/led01_55.gif
                    /asset/image/sub/product/led1/led01_56.gif
                    /asset/image/sub/product/led1/led01_57.gif
                    /asset/image/sub/product/led1/led01_58.gif
                    /asset/image/sub/product/led1/led01_59.gif
                    /asset/image/sub/product/led1/led01_60.gif
                    /asset/image/sub/product/led1/led01_61.gif
                    /asset/image/sub/product/led1/led01_62.gif
                    /asset/image/sub/product/led1/led01_63.gif
                    /asset/image/sub/product/led1/led01_64.gif
                    /asset/image/sub/product/led1/led01_65.gif
                    /asset/image/sub/product/led1/led01_66.gif
                    /asset/image/sub/product/led1/led01_67.gif
                    /asset/image/sub/product/led1/led01_68.gif
                    /asset/image/sub/product/led1/led01_69.gif
                    /asset/image/sub/product/led1/led01_70.gif
                    /asset/image/sub/product/led1/led01_71.gif
                    /asset/image/sub/product/led1/led01_72.gif
                    /asset/image/sub/product/led1/led01_73.gif
                    /asset/image/sub/product/led1/led01_74.gif
                    /asset/image/sub/product/led1/led01_75.gif
                    /asset/image/sub/product/led1/led01_76.gif
                    /asset/image/sub/product/led1/led01_77.gif
                    /asset/image/sub/product/led1/led01_78.gif
                    /asset/image/sub/product/led1/led01_79.gif
                    /asset/image/sub/product/led1/led01_80.gif
                    /asset/image/sub/product/led1/led01_81.gif
                    /asset/image/sub/product/led1/led01_82.gif
                    /asset/image/sub/product/led1/led01_83.gif
                    /asset/image/sub/product/led1/led01_84.gif
                    /asset/image/sub/product/led1/led01_85.gif
                    /asset/image/sub/product/led1/led01_86.gif
                    /asset/image/sub/product/led1/led01_87.gif
                    /asset/image/sub/product/led1/led01_88.gif
                    /asset/image/sub/product/led1/led01_89.gif
                    /asset/image/sub/product/led1/led01_90.gif
                `;
            
                return data.split('\n')[index];
            }
            
            
            const frameCount = 90;
            
            const images = [];
            const imageSeq = {
                frame: 0,
            };
            
            for(let i = 1; i <= frameCount; i++){
                const img = new Image();
                img.src = files(i);
                images.push(img);
            }
            
            gsap.to(imageSeq, {
                frame: frameCount - 1,
                snap: 'frame',
                ease: 'none',
                scrollTrigger: {
                    scrub: 0.000001,
                    pin: true,
                    // markers: true,
                    trigger: '.pbx._2',
                    start: "top top",
                    end: "bottom top",
                },
                onUpdate: render,
            });
            
            images[0].onLoad = render;

            
            function render() {
                scaleImage(images[imageSeq.frame], context);
            }
            
            function scaleImage(img, ctx){
                var canvas = ctx.canvas;
                var hRatio = canvas.width / img.width;
                var vRatio = canvas.height / img.height;
                var ratio = Math.max(hRatio, vRatio);
                var centerShift_x = (canvas.width - img.width * ratio) / 2;
                var centerShift_y = (canvas.height - img.height * ratio) / 2;
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(
                    img,
                    0,
                    0,
                    img.width,
                    img.height,
                    centerShift_x,
                    centerShift_y,
                    img.width * ratio,
                    img.height * ratio
                );
                
            }
        }

        sequence_animation();
    }
});



/* led03 sequence */

ScrollTrigger.matchMedia({
    '(min-width: 821px)' : function() {
        // 이미지 시퀀스
        function sequence_animation() {
            const canvas = document.querySelector("#product3");
            const context = canvas.getContext("2d");
            
            window.addEventListener("resize", function () {
                render();
            });
            
            function files(index){
                var data = `
                    /asset/image/sub/product/led1/led01_1.gif
                    /asset/image/sub/product/led1/led01_2.gif
                    /asset/image/sub/product/led1/led01_3.gif
                    /asset/image/sub/product/led1/led01_4.gif
                    /asset/image/sub/product/led1/led01_5.gif
                    /asset/image/sub/product/led1/led01_6.gif
                    /asset/image/sub/product/led1/led01_7.gif
                    /asset/image/sub/product/led1/led01_8.gif
                    /asset/image/sub/product/led1/led01_9.gif
                    /asset/image/sub/product/led1/led01_10.gif
                    /asset/image/sub/product/led1/led01_11.gif
                    /asset/image/sub/product/led1/led01_12.gif
                    /asset/image/sub/product/led1/led01_13.gif
                    /asset/image/sub/product/led1/led01_14.gif
                    /asset/image/sub/product/led1/led01_15.gif
                    /asset/image/sub/product/led1/led01_16.gif
                    /asset/image/sub/product/led1/led01_17.gif
                    /asset/image/sub/product/led1/led01_18.gif
                    /asset/image/sub/product/led1/led01_19.gif
                    /asset/image/sub/product/led1/led01_20.gif
                    /asset/image/sub/product/led1/led01_21.gif
                    /asset/image/sub/product/led1/led01_22.gif
                    /asset/image/sub/product/led1/led01_23.gif
                    /asset/image/sub/product/led1/led01_24.gif
                    /asset/image/sub/product/led1/led01_25.gif
                    /asset/image/sub/product/led1/led01_26.gif
                    /asset/image/sub/product/led1/led01_27.gif
                    /asset/image/sub/product/led1/led01_28.gif
                    /asset/image/sub/product/led1/led01_29.gif
                    /asset/image/sub/product/led1/led01_30.gif
                    /asset/image/sub/product/led1/led01_31.gif
                    /asset/image/sub/product/led1/led01_32.gif
                    /asset/image/sub/product/led1/led01_33.gif
                    /asset/image/sub/product/led1/led01_34.gif
                    /asset/image/sub/product/led1/led01_35.gif
                    /asset/image/sub/product/led1/led01_36.gif
                    /asset/image/sub/product/led1/led01_37.gif
                    /asset/image/sub/product/led1/led01_38.gif
                    /asset/image/sub/product/led1/led01_39.gif
                    /asset/image/sub/product/led1/led01_40.gif
                    /asset/image/sub/product/led1/led01_41.gif
                    /asset/image/sub/product/led1/led01_42.gif
                    /asset/image/sub/product/led1/led01_43.gif
                    /asset/image/sub/product/led1/led01_44.gif
                    /asset/image/sub/product/led1/led01_45.gif
                    /asset/image/sub/product/led1/led01_46.gif
                    /asset/image/sub/product/led1/led01_47.gif
                    /asset/image/sub/product/led1/led01_48.gif
                    /asset/image/sub/product/led1/led01_49.gif
                    /asset/image/sub/product/led1/led01_50.gif
                    /asset/image/sub/product/led1/led01_51.gif
                    /asset/image/sub/product/led1/led01_52.gif
                    /asset/image/sub/product/led1/led01_53.gif
                    /asset/image/sub/product/led1/led01_54.gif
                    /asset/image/sub/product/led1/led01_55.gif
                    /asset/image/sub/product/led1/led01_56.gif
                    /asset/image/sub/product/led1/led01_57.gif
                    /asset/image/sub/product/led1/led01_58.gif
                    /asset/image/sub/product/led1/led01_59.gif
                    /asset/image/sub/product/led1/led01_60.gif
                    /asset/image/sub/product/led1/led01_61.gif
                    /asset/image/sub/product/led1/led01_62.gif
                    /asset/image/sub/product/led1/led01_63.gif
                    /asset/image/sub/product/led1/led01_64.gif
                    /asset/image/sub/product/led1/led01_65.gif
                    /asset/image/sub/product/led1/led01_66.gif
                    /asset/image/sub/product/led1/led01_67.gif
                    /asset/image/sub/product/led1/led01_68.gif
                    /asset/image/sub/product/led1/led01_69.gif
                    /asset/image/sub/product/led1/led01_70.gif
                    /asset/image/sub/product/led1/led01_71.gif
                    /asset/image/sub/product/led1/led01_72.gif
                    /asset/image/sub/product/led1/led01_73.gif
                    /asset/image/sub/product/led1/led01_74.gif
                    /asset/image/sub/product/led1/led01_75.gif
                    /asset/image/sub/product/led1/led01_76.gif
                    /asset/image/sub/product/led1/led01_77.gif
                    /asset/image/sub/product/led1/led01_78.gif
                    /asset/image/sub/product/led1/led01_79.gif
                    /asset/image/sub/product/led1/led01_80.gif
                    /asset/image/sub/product/led1/led01_81.gif
                    /asset/image/sub/product/led1/led01_82.gif
                    /asset/image/sub/product/led1/led01_83.gif
                    /asset/image/sub/product/led1/led01_84.gif
                    /asset/image/sub/product/led1/led01_85.gif
                    /asset/image/sub/product/led1/led01_86.gif
                    /asset/image/sub/product/led1/led01_87.gif
                    /asset/image/sub/product/led1/led01_88.gif
                    /asset/image/sub/product/led1/led01_89.gif
                    /asset/image/sub/product/led1/led01_90.gif
                `;
            
                return data.split('\n')[index];
            }
            
            
            const frameCount = 90;
            
            const images = [];
            const imageSeq = {
                frame: 0,
            };
            
            for(let i = 1; i <= frameCount; i++){
                const img = new Image();
                img.src = files(i);
                images.push(img);
            }
            
            gsap.to(imageSeq, {
                frame: frameCount - 1,
                snap: 'frame',
                ease: 'none',
                scrollTrigger: {
                    scrub: 0.000001,
                    pin: true,
                    // markers: true,
                    trigger: '.pbx._3',
                    start: "top top",
                    end: "bottom top",
                },
                onUpdate: render,
            });
            
            images[0].onLoad = render;

            
            function render() {
                scaleImage(images[imageSeq.frame], context);
            }
            
            function scaleImage(img, ctx){
                var canvas = ctx.canvas;
                var hRatio = canvas.width / img.width;
                var vRatio = canvas.height / img.height;
                var ratio = Math.max(hRatio, vRatio);
                var centerShift_x = (canvas.width - img.width * ratio) / 2;
                var centerShift_y = (canvas.height - img.height * ratio) / 2;
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(
                    img,
                    0,
                    0,
                    img.width,
                    img.height,
                    centerShift_x,
                    centerShift_y,
                    img.width * ratio,
                    img.height * ratio
                );
                
            }
        }

        sequence_animation();
    }
});

