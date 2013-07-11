<script>
$(function(){
    var smallImg = $('.smallpic img');
    smallImg.each(function(){
        var thisimg = $(this);
        var filename = thisimg.attr('src').replace(/^.+\/|_s.jpg$/g,'');
        var imgName = $(this).attr('name');
        var mainInfo_opt = {
            'gr_mission': {
                txt: 'We are an international, all volunteer charitable organization.  Because volunteers and sponsors cover administrative expenses, 100% of your donation goes directly to benefit our projects and the Tibetan people.',
                fontsize: '16px',
                lineheight: '30px',
                url: 'aboutus/mission'
            },
            'elementary_school': {
                txt: 'You can transform a child\'s life',
                fontsize: '24px',
                lineheight: '26px',
                url: 'projects/elementary_school'
            },
            'clinic': {
                txt: 'Save a life',
                fontsize: '36px',
                lineheight: '38px',
                url: 'projects/clinic'
            },
            'elder_care': {
                txt: 'We are the elderly of the future',
                fontsize: '24px',
                lineheight: '26px',
                url: 'projects/elder_care'
            },
            'donate': {
                txt: 'Please give hope! You can make a different in their future life.',
                fontsize: '16px',
                lineheight: '30px',
                url: 'donate/donate'
            }
        };

        thisimg.wrap('<div class="imgout"></div>');
        thisimg.click(function(){
            smallImg.each(function(){
                $(this).closest('.thumbnail').removeClass('graycolor');
            })
            thisimg.closest('.thumbnail').addClass('graycolor');
            $('.mainpic').css('background', 'url(img/'+filename+'.jpg) no-repeat');
            $('.mainpic .mainpicInfo').find('p').html(mainInfo_opt[filename].txt);
            $('.mainpic .mainpicInfo').find('p').css('font-size', mainInfo_opt[filename].fontsize);
            $('.mainpic .mainpicInfo').find('p').css('line-height', mainInfo_opt[filename].lineheight);
            $('.mainpic .mainpicInfo').find('a').attr('href', mainInfo_opt[filename].url);
        });
    });
});
</script>