<!-- Infinity Load -->
<!-- <script>
    $(document).ready(function() {

        var limit = 7;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit) {
            var output = '';
            for (var count = 0; count < limit; count++) {
                // output += 'Loading Data';
            }
            $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

        function load_data(limit, start) {
            $.ajax({
                url: "<?=base_url();?>/news/loadMoreCat",
                method: "POST",
                data: {
                    kanal: "<?= $kanal ?>",
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    if (data == '') {
                        $('#load_data_message').html('<h3>No More Result Found</h3>');
                        action = 'active';
                    } else {
                        $('#load_data').append(data);
                        $('#load_data_message').html("");
                        document.getElementById("load-more").innerHTML = "BERITA LAINNYA";
                        action = 'inactive';
                    }
                }
            })
        }

        if (action == 'inactive') {
            action = 'active';
            load_data(limit, start);
        }

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                lazzy_loader(limit);
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_data(limit, start);
                }, 1000);
            }
        });

    });
</script> -->
<!-- ! Infinity Load -->
<!-- On Button Loadmore -->
<script>
    $(document).ready(function() {

        var limit = 7;
        var start = 0;
        var action = 'inactive';

        function lazzy_loader(limit) {
            var output = '';
            for (var count = 0; count < limit; count++) {
                // output += 'Loading Data';
            }
            $('#load_data_message').html(output);
        }

        lazzy_loader(limit);

        function load_data(limit, start) {
            $.ajax({
                url: "<?=base_url();?>/news/loadMoreCat",
                method: "POST",
                data: {
                    kanal: "<?= $kanal ?>",
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    if (data == '') {
                        $('#load_data_message').html('<h3>No More Result Found</h3>');
                        action = 'active';
                    } else {
                        $('#load_data').append(data);
                        $('#load_data_message').html("");
                        document.getElementById("load-more").innerHTML = "BERITA LAINNYA";
                        action = 'inactive';
                    }
                }
            })
        }

        if (action == 'inactive') {
            action = 'active';
            load_data(limit, start);
        }

        $('#load-more').click(function() {
            if (action == 'inactive') {
                document.getElementById("load-more").innerHTML = "LOADING ...";
                lazzy_loader(limit);
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_data(limit, start);
                }, 1000);
            }
        });

    });
</script>
<!-- ! On Button Loadmore -->