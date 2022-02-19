    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/Chart.min.js"></script>
    <script src="scripts/shards.min.js"></script>
    <script src="scripts/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-components-overview.1.1.0.js"></script>
    <script src="scripts/quill.min.js"></script>
    <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
    <script>
// **********************
$(function() {
    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/, '') +
        "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    // now grab every link from the navigation
    $('.menu a').each(function() {
        $(this).closest("li").removeClass('active');
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            $(this).closest("li").addClass('active');
        }
    });
});
// **********************
function xacNhanXoa(masp) {
    var flag = confirm("Bạn thực sự muốn xóa?");
    if (flag == true) {
        window.location.href = "../controller/xuly-sp.php?action=xoa&masp=" + masp;
    }
}
// **********************
    </script>