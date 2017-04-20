$("#submit-team").click(function(event) {

    $(this).prop('disabled', true);
    $(this).prop('value', 'Submitting Team please wait...');
    $('#teamForm').submit();
    // do other stuff here
    return true;
});