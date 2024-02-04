document.getElementById('Notification').addEventListener('mouseover', function(){
    var svg = this.getElementsByTagName('svg')[0];
    svg.style.fill = 'black';
});

document.getElementById('Notification').addEventListener('mouseout', function(){
    svg = this.getElementsByTagName('svg')[0];
    svg.style.fill = '#5c16c5';
});