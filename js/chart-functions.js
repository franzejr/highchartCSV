	function clearChart(){
    	$("#graphic_container").html("");
    }

	function getTypeGraphic(){
	  		return $("#typeGraphic").val();
	}

	function getDataXFromCSV(){
        var resultX = [];
        for (var i = 0; i < finalVector.length ; i++) {
        	resultX[i] = parseFloat(finalVector[i][0]);
        };
        return resultX;
    }

    function getDataYFromCSV(){
        var resultY = [];
        for (var i = 0; i < finalVector.length ; i++) {
        	resultY[i] = parseFloat(finalVector[i][1]);
        };
        return resultY;
    }


	function createChart(){

    	var options = {
            chart: {
                renderTo: 'graphic_container',
                width: 600,
        		height: 500,
                type: getTypeGraphic()
            },
            title: {
                text: 'Machine Learning'
            },
            subtitle: {
                text: 'Machine Learning'
            },
            xAxis: {
                categories: []
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'°C';
                }
            }
        };

        //Initializing a new chart with the options above
        chart = new Highcharts.Chart(options);

        //Inserting the data
        chart.addSeries({data:getDataXFromCSV(),name:'Line'},true);
        chart.addSeries({data:getDataYFromCSV(),name:'Line'},true);
    }
