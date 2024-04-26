    $(document).ready(function() {
    $('.nav-link').on('click', function() {
        // Remove the 'active' class from all navigation links
        $('.nav-link').removeClass('active');

        // Add the 'active' class to the clicked link
        $(this).addClass('active');
    });
});
