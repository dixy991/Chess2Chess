const token = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function(){
    $(".onHoverPrikaziPodMeni").hover(function() {
        $(this).find(">ul").has("li").addClass("show");
    }, function() {
        $(this).find(">ul").has("li").removeClass("show");
    });
});
