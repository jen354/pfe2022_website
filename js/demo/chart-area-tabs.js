window.chartColors = {
    red: 'rgb(204, 16, 16)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(28, 200, 138)',
    blue: 'rgb(54, 185, 204)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(231,233,237)'
  };
  
  var randomScalingFactor = function() {
    return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
  };
  
  var line1 = [30, 28, 25, 29, 29, 26, 21, 20, 28, 26, 30, 27 ];
  
  var line2 = [69, 52, 65, 73, 40, 44, 34, 55, 26, 44, 79, 26, ];

  var line3 = [1442, 1127, 1242, 1140, 1252, 1266, 1178, 1215, 1434, 1215, 1134, 1466, ];

  var line4 = [1264, 1489, 1377, 1169, 1449, 1313, 1144, 1126, 1391, 1139, 1276, 1270, ];

  var line5 = [21, 29, 30, 17, 20, 25, 27, 20, 26, 30, 20, 19 ];
  
  var line6 = [40, 35, 70, 80, 45, 44, 60, 72, 48, 40, 68, 30, ];

  var line7 = [1242,  1178, 1266, 1442, 1127, 1466, 1140, 1252,  1215, 1434, 1215, 1134, ];

  var line8 = [ 1489, 1126, 1449, 1377, 1313, 1391, 1264, 1139, 1169, 1144, 1276, 1270, ];
  
  var MONTHS = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
  var config_temp_area1 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "Température en celcius",
        backgroundColor: window.chartColors.red,
        borderColor: window.chartColors.red,
        data: line1,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'Température moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_temp_area1 = document.getElementById("temp_area1").getContext("2d");
  var temp_area1 = new Chart(ctx_temp_area1, config_temp_area1);

  var config_hum_area1 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "Humidité en %",
        backgroundColor: window.chartColors.green,
        borderColor: window.chartColors.green,
        data: line2,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'Humidité moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_hum_area1 = document.getElementById("hum_area1").getContext("2d");
  var Hum_area1 = new Chart(ctx_hum_area1, config_hum_area1);
  
  var config_lum_area1 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "Lumière en nm",
        backgroundColor: window.chartColors.blue,
        borderColor: window.chartColors.blue,
        data: line3,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'Lumière moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_lum_area1 = document.getElementById("lum_area1").getContext("2d");
  var Lum_area1 = new Chart(ctx_lum_area1, config_lum_area1);

  var config_co2_area1 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "C02 en ppm",
        backgroundColor: window.chartColors.yellow,
        borderColor: window.chartColors.yellow,
        data: line4,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'C02 moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_co2_area1 = document.getElementById("co2_area1").getContext("2d");
  var co2_area1 = new Chart(ctx_co2_area1, config_co2_area1);

  var config_temp_area2 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "Température en celcius",
        backgroundColor: window.chartColors.red,
        borderColor: window.chartColors.red,
        data: line5,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'Température moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_temp_area2 = document.getElementById("temp_area2").getContext("2d");
  var temp_area2 = new Chart(ctx_temp_area2, config_temp_area2);

  var config_hum_area2 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "Humidité en %",
        backgroundColor: window.chartColors.blue,
        borderColor: window.chartColors.blue,
        data: line6,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'Humidité moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_hum_area2 = document.getElementById("hum_area2").getContext("2d");
  var Hum_area2 = new Chart(ctx_hum_area2, config_hum_area2);
  
  var config_lum_area2 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "Lumière en nm",
        backgroundColor: window.chartColors.green,
        borderColor: window.chartColors.green,
        data: line7,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'Lumière moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_lum_area2 = document.getElementById("lum_area2").getContext("2d");
  var Lum_area2 = new Chart(ctx_lum_area2, config_lum_area2);

  var config_co2_area2 = {
    type: 'line',
    data: {
      labels: MONTHS,
      datasets: [{
        label: "C02 en ppm",
        backgroundColor: window.chartColors.yellow,
        borderColor: window.chartColors.yellow,
        data: line8,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title:{
        display:true,
        text:'C02 moyenne par mois'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
     hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Mois'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
        }]
      }
    }
  };

  var ctx_co2_area2 = document.getElementById("co2_area2").getContext("2d");
  var co2_area2 = new Chart(ctx_co2_area2, config_co2_area2);
  