$(document).ready(function() {
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var video_url = button.data('whatever')
      var video_title = button.data('title')
      var modal = $(this)
      modal.find('iframe').attr('src',video_url)
      $('#myModalLabel').html(video_title)
    });

    //Stop video when modal is closed
    $("#exampleModal").on('hidden.bs.modal', function (e) {
        $("#exampleModal iframe").attr("src", $("#exampleModal iframe").attr("src"));
        //$('#myModalLabel').html('');
    });
});