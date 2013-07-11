<script>
$(function(){
    var smallpics = $('.contentarea .holdcols img');
    smallpics.each(function(){
        var thisimg = $(this);
        thisimg.wrap('<div class="imgout"></div>');
    })
});
</script>