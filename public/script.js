$(document).ready(function() {

    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: site_url + "/event",
        displayEventTime: false,
        editable: true,
        eventRender: function(event) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        }
        
})

})