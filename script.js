$(document).ready(function() {
    // kết thúc Văn bản Tìm kiếm đến máy chủ
    $("#search").keyup(function() {
        let searchText = $(this).val();
        if (searchText != "") {
            $.ajax({
                url: "action.php",
                method: "post",
                data: {
                    query: searchText,
                },
                success: function(response) {
                    $("#show-list").html(response);
                },
            });
        } else {
            $("#show-list").html("");
        }
    });
    // Đặt văn bản đã tìm kiếm trong trường nhập liệu khi nhấp vào nút tìm kiếm
    $(document).on("click", "a", function() {
        $("#search").val($(this).text());
        $("#show-list").html("");
    });
});