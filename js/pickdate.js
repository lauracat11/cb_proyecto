$(function () {
    $(".calendario").datepicker({
        dateFormat: "dd-mm-yy",
        dayNames: ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Diverndres", "Dissabte"],
        dayNamesMin: ["Dg", "Dl", "Dt", "Dc", "Dj", "Dv", "Ds"],
        monthNames: ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Septembre", "Octobre", "Novembre", "Decembre"],
        todayHighlight: true,
    });
});

