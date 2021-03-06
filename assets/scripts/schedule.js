$(document).ready(function() {
    var scheduleSelector = $('#schedule-result-list-table');
    var scheduleTable = createDataTable(scheduleSelector);
    var main_schedule_form = "";
    var do_again = 0;
    function searchScheduleAJAX(){
        // console.log("asd");
        $.ajax({
            url: app_url+"doors/doors/searchEventsBySchedule",
            type: "POST",
            data: main_schedule_form,
            dataType: "json",
            beforeSend: function(){
                $("#schedule-loading").show();
            },
            success: function(data){
                $("#schedule-loading").hide(1000);
                if (data.error===true) {
                    showErrorMessage('#schedule-message',data.msg,5000);
                }else{
                    destroyDataTable(scheduleTable);
                    var events = createDoorsEventsResultBody(data.events);
                    $("#schedule-result-list-body").html(events);
                    scheduleTable = createDataTable(scheduleSelector);
                    $("#schedule-result-list").show();
                    if(do_again < 1) {
                        do_again = 1;
                        setInterval(searchScheduleAJAX, 20000);
                    }
                }
            },
            error: function(request, error) {
                console.log("Request: " + JSON.stringify(request));
                console.log("Error: " + JSON.stringify(error));
            }
        });
    }
    $("#search-schedule").click(function () {
        main_schedule_form = $('#schedule-form').serialize();
        searchScheduleAJAX(0);
    });
});
