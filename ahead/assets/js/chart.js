function createDonutCharts() {
    $("<style type='text/css' id='dynamic' />").appendTo("head");
    $("div[chart-type*=donut]").each(function () {
      var d = $(this);
      var id = d.attr('id');

      var style = $("#dynamic").text() + "#" + id + " .donut-bite[data-segment-index=\"0\"]{-moz-transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0);}#" + id + " .donut-bite[data-segment-index=\"0\"]:BEFORE{-moz-transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0); background-color: #aaa;}#" + id + " .donut-bite[data-segment-index=\"0\"]:BEFORE{ background-color: #aaa;}#" + id + " .donut-bite[data-segment-index=\"0\"].large:AFTER{ background-color: #aaa;}";
      $("#dynamic").text(style);
     
    });
}

$(document).ready(function() {
    createDonutCharts();
});