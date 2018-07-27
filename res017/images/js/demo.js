$('.demo').on({
            mouseover : function(){
                $('span').css({top:'-30px'});
                $('b').css({top:'0'});
            },
            mouseout : function(){
                $('span').css({top:'0'});
                $('b').css({top:'30px'});
            }
        })