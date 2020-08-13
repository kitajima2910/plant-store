function rating(route) {
    let customer_id = $('.wishlist_id').val();
            
    if(customer_id === '') {
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Bạn chưa đăng nhập');
            alertify.set('notifier','delay', delay);
        }, 300);
        return;
    }

    let rating = $("input[name='star']:checked").val();
    let comment = $("#txtcomment").val();

    if(rating === undefined) {
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Bạn chưa đánh giá');
            alertify.set('notifier','delay', delay);
        }, 300);
        return;
    }

    if(comment.trim() === '') {
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Bạn chưa viết ý kiến của bạn');
            alertify.set('notifier','delay', delay);
        }, 300);
        return;
    }

    let url = route;
    let productId = $('#product_id').val();

    $.ajax({
        type: "get",
        url: url,
        data: {
            user_id: customer_id,
            product_id: productId,
            comment: comment,
            rating: rating
        },
        success: function (response) {
            if(response.code === 200) {
                $("input[name='star']").prop('checked', false);
                $("#txtcomment").val('');
                $('#rating-data').html(response.viewRatingData);
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.success('Cảm ơn bạn đã đánh giá');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
            if(response.code === 204) {
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.error('Bạn đã đánh giá sản phẩm này rồi');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
        }
    });
}
