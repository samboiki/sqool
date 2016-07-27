
var handleDataTableScroller = function() {
	"use strict";
    var iTotalMarket = 0;
    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            
            sAjaxSource:    "../assets/smarks.json",
            deferRender:    true,
            scrollY:        300,
            scrollCollapse: true,
            scroller:       true,
            responsive: true,
            aoColumnDefs :[
                            {"className": "dt-center", "targets": "_all"},
                            {
                            "sTitle":"Site name",
                            "aTargets": [ "site_name" ]
                            },
                            {
                              "aTargets": [ 0 ],
                              "bSortable": false,
                              "mRender": function ( url, type, row )  {
                                                                            return '<span class="badge badge-inverse"><a href="user/'+ url +'" class="text-white" style="text-decoration:none;"><strong>' + url + '</strong></a></span>';
                                                                        }
                            },
                            {
                              "aTargets": [ 4 ],
                              "mRender": function ( url, type, row )  {
                                                                            return '<strong><a class="text-inverse">' + url +'</a></strong><a class="text-muted f-s-11"> / '+ row[3]+'</a>';
                                                                        }
                            },
                            {
                              "aTargets": [ 5 ],
                              "mRender": function ( url, type, row )  {
                                                                            if(url > 80){
                                                                               return  '<span class=""><a href="user/'+ url +'" class="text-success" style="text-decoration:none;"><strong>' + url + ' %</strong></a></span>'; 
                                                                            }
                                                                            return  '<span class=""><a href="user/'+ url +'" class="text-inverse" style="text-decoration:none;"><strong>' + url + ' %</strong></a></span>';
                                                                        }
                            },
                            {
                              "aTargets": [ 6 ],
                              "mRender": function ( url, type, row )  {
                                                                            return '<strong><a class="text-inverse">' + url +'</a></strong><a class="text-muted f-s-11"></a>';
                                                                        }
                            }
                           ],
            "fnFooterCallback": function ( nRow, aaData, iStart, iEnd, aiDisplay ) {
             function roundToTwo(num) {    
                    return +(Math.round(num + "e+2")  + "e-2");
                }
            
            /* Calculate the market share for browsers on this page */
            var mark = 0;
            for ( var i=iStart ; i<iEnd ; i++ )
            {mark += aaData[ aiDisplay[i] ][4]*1;}
            
            /* Modify the footer row to match what we want $('th:eq(5)', nRow).html(iPageMarket);*/
            var nCells = nRow.getElementsByTagName('th');
            nCells[0].innerHTML = 'Total';
            nCells[1].innerHTML = '';
            nCells[2].innerHTML = '';
            nCells[3].innerHTML = '';
            var numb2 = (parseFloat(mark * 100)/100)/iEnd;
            var tot = roundToTwo(numb2);
            nCells[4].innerHTML =  tot  + '<a class="text-muted f-s-10"> average</a>';
            //'<i class="fa fa-dot-circle-o">  </i> ' + parseInt(mark * 100)/100 +
            var perc = 0
            var wei = 0;
            for ( var c=iStart ; c<iEnd ; c++ )
            { perc += aaData[ aiDisplay[c] ][5]*1;
              wei += aaData[ aiDisplay[c] ][6]*1;}
            
            var numb3 = (parseFloat(perc * 100)/100)/iEnd;
            var tot1 = roundToTwo(numb3);
            nCells[5].innerHTML = ''+ tot1 +'<a class="text-muted f-s-10">% average</a>';
            
            var numb4 = (parseFloat(wei * 100)/100)/iEnd;
            var tot4 = roundToTwo(numb4);
            nCells[6].innerHTML = '<a class="text-inverse f-s-14">'+ parseInt(wei * 100)/100 +'</a><a class="text-muted f-s-10"> total</a>';
   
        }
        
        });
    }
};

var TableManageScroller = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableScroller();
        }
    };
}();