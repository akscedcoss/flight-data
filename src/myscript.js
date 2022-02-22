$.getJSON('flightsData.json', function (json) {
  // console.log(json) // this will show the info it in firebug console
  arr = []
  $('tbody').html('<tr>Loading....</tr>')

  json.forEach(element => {
    color = 'normal'
    if (element.status == 'On Time') {
      color = 'green'
    } else if (element.status == 'On Time') {
      color = 'yellow'
    } else if (element.status == 'Arriving Early By 30mins') {
      color = 'yellow'
    } else if (element.status == 'Departed') {
      color = 'red'
    }
    console.log(color)
    $('tbody').append(`
    <tr class="${color}"> 
    <td>${element.flightNumber}</td>
    <td>${element.from}</td>
    <td>${element.to}</td>
    <td>${element.arrival_time}</td>
    <td>${element.departure_time}</td>
    <td>${element.status}</td>
    </tr>`)
  })

  console.log(arr)
})
