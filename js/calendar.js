$.getScript('http://arshaw.com/js/fullcalendar-1.6.4/fullcalendar/fullcalendar.min.js',function(){
  
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: true,
    eventColor: '#fed136',
    eventTextColor: '#000000',
    events: [
       {
        title: 'Glencoe Days Parade',
        start: new Date(2015, 5, 27, 12, 0),
        end: new Date(2015, 5, 27, 16, 30),
        allDay: false
      },
      {
        title: 'Shop Closed For Painting',
        start: new Date(2015, 5, 4, 9, 0),
        end: new Date(2015, 5, 8, 12, 0),
        color: '#ff0000'
      },
      {
        title: 'Robotics Training',
        start: new Date(2015, 5, 20, 8, 0),
        end: new Date(2015, 5, 20, 19, 0),
        allDay: false
      },
      {
        title: 'Engineering Advisory Meeting',
        start: new Date(2015, 5, 30, 7, 30),
        end: new Date(2015, 5, 30, 8, 30),
        allDay: false
      },
      {
        title: 'State Fair',
        start: new Date(2015, 8, 4, 12, 0),
        end: new Date(2015, 8, 4, 16, 30),
        allDay: true
      },
      /*{
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d-5),
        end: new Date(y, m, d-2)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'Click for Google',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://google.com/'
      }*/
    ]
  });
})