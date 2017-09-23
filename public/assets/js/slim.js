            window.onload = function(){
                if(!navigator.userAgent.match('Macintosh')){
                    var element = document.querySelectorAll('.slimScroll');
                    // Apply slim scroll plugin
                    // var one = new slimScroll(element[0], {
                    //     'wrapperClass': 'scroll-wrapper unselectable mac',
                    //     'scrollBarContainerClass': 'scrollBarContainer',
                    //     'scrollBarContainerSpecialClass': 'animate',
                    //     'scrollBarClass': 'scroll',
                    //     'keepFocus': true
                    // });
                    // var two = new slimScroll(element[1], {
                    //     'wrapperClass': 'wrapper',
                    //     'scrollBarContainerClass': 'scrollBarContainer',
                    //     'scrollBarClass': 'scrollBar'
                    // });

                    var three = new slimScroll(element[0], {
                        'wrapperClass': 'scroll-wrap',
                        'scrollBarContainerClass': 'scroll-bar-wrap',
                        'scrollBarClass': 'scroll-bar'
                    });

                    // resize example
                    // To make the resizing work, set the height of the container in PERCENTAGE
                    window.onresize = function(){
                        one.resetValues();
                        two.resetValues();
                        three.resetValues();
                    }
                }
                else{
                    document.write("For Mac users, this custom slimscroll styles will not be applied");
                }
            }
