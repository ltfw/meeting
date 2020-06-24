var jam = null, tanggal = null, date = null;
var update = function() {
    date = moment(new Date())
    document.getElementById('jam').innerHTML=date.format('HH:mm');
    document.getElementById('tanggal').innerHTML = date.format('dddd<br> DD MMMM YYYY');
  };
document.addEventListener('DOMContentLoaded', function() {
    update();
    setInterval(update, 1000);
});