$(document).ready(function()
{
 
    $('#search_keywords').keyup(function(key)
    {
        if(this.value.length >= 3 || this.value == '') {
            $('#loader').show();
            $('#products').load(
                $(this).parent('form').attr('action'),
                { query: this.value ? this.value + '*' : this.value },
                function() {
                    $('#loader').hide();
                }
            );
        }
    });
});
