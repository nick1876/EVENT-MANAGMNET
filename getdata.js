const venueArr=[]
const timeArr=[]
const descArr=[]
function getData(){
    const venue = document.querySelector('#venue').value
    venueArr.push(venue)
    console.log(venue)
    const time = document.querySelector('#time').value
    timeArr.push(time)
    console.log(time)
    const desc = document.querySelector('#desc').value
    descArr.push(desc)
    console.log(desc)
    const img = document.querySelector('#image')
    console.log(img)
    postdata(venue,time,desc)
  }
  
  function postdata(venue,time,desc){
    window.location.href='./University.html'
    console.log('post data')
    const venueDiv = document.createElement('div')
    venueArr.push(venue)
    venueDiv.innerText = venue
    
    const timeDiv = document.createElement('div')
    timeArr.push(time)
    timeDiv.innerText = time
    
    const descDiv = document.createElement('div')
    descArr.push(desc)
    descDiv.innerText = desc
  }