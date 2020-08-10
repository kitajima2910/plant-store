<a href="#" class="rate_star"><span class="fa fa-star " id="star1"></span></a>
<a href="#" class="rate_star"><span class="fa fa-star " id="star2"></span></a>
<a href="#" class="rate_star"><span class="fa fa-star " id="star3"></span></a>
<a href="#" class="rate_star"><span class="fa fa-star" id="star4"></span></a>
<a href="#" class="rate_star"><span class="fa fa-star" id="star5"></span></a>
<p>(trung bình {{ number_format($ratingAverage, 1, '.' , ',') }} sao dựa trên {{ $ratingCount }} đánh giá)</p>

<script>
$(function() {
    // Ratings
    let ratingAverageLength = {{ $ratingAverage }};
    for(var i = 1; i <= ratingAverageLength; i++){
        $("#star"+i).addClass("checked");
    }
});
</script>
