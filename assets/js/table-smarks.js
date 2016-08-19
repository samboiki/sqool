
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
            //responsive: true,
            aoColumns: [ ,,,{ "bVisible": false},,,,{ "bVisible": false},{ "bVisible": false}],
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
                              "aTargets": [ 1 ],
                              "mRender": function ( url, type, row )  {
                                                                            return '<strong><a class="text-inverse f-s-12">'+ url + '</a></strong><a class="text-muted f-s-11">   #'+ row[8]+'</a>';
                                                                      }
                            },
                            {
                              "aTargets": [ 2 ],
                              "mRender": function ( url, type, row )  {
                                                                            return '<strong><a class="text-inverse f-s-12">'+ url + '</a></strong>';
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
                                                                            if(url <= 40){
                                                                               return  '<a href="user/'+ url +'" class="text-danger" style="text-decoration:none;"><strong>' + url + ' % </strong></a><a class="text-muted f-s-10"></a>'; 
                                                                            }
                                                                            else if(url < 54){
                                                                               return  '<a href="user/'+ url +'" class="text-warning" style="text-decoration:none;"><strong>' + url + ' % </strong></a><a class="text-muted f-s-10"></a>'; 
                                                                            }
                                                                            else if(url <= 75){
                                                                               return  '<a href="user/'+ url +'" class="text-success0" style="text-decoration:none;"><strong>' + url + ' % </strong></a><a class="text-muted f-s-10"></a>'; 
                                                                            }
                                                                            else  return  '<span class=""><a href="user/'+ url +'" class="text-success1" style="text-decoration:none;"><strong>' + url + ' %</strong></a></span>';
                                                                        }
                            },
                            {
                              "aTargets": [ 6 ],
                              "mRender": function ( url, type, row )  {
                                                                            return '<strong><a class="text-inverse">' + url +'</a></strong><a class="text-muted f-s-11"> / '+ row[7]+'</a>';
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
            nCells[0].innerHTML = '';
            nCells[1].innerHTML = '';
            nCells[2].innerHTML = '';
            var numb2 = (parseFloat(mark * 100)/100)/iEnd;
            var tot = roundToTwo(numb2);
            nCells[3].innerHTML =  tot  + '<a class="text-muted f-s-10"> average</a>';
            //'<i class="fa fa-dot-circle-o">  </i> ' + parseInt(mark * 100)/100 +
            var perc = 0;
            for ( var c=iStart ; c<iEnd ; c++ )
            { perc += aaData[ aiDisplay[c] ][5]*1;
              wei += aaData[ aiDisplay[c] ][6]*1;
              owei += aaData[ aiDisplay[c] ][7]*1;
            }
            
            var numb3 = (parseFloat(perc * 100)/100)/iEnd;
            var tot1 = roundToTwo(numb3);
            if(tot1 <= 40 ){
                 nCells[4].innerHTML = '<a class="text-danger f-s-12">'+ tot1 +'% average <span class="badge badge-inverse">E</span></a>';
            }
            else if(tot1 <= 60 ){
                 nCells[4].innerHTML = '<a class="text-warning f-s-12">'+ tot1 +'% average <span class="badge badge">C</span></a>';
            }
            else if(tot1 <= 80 ){
                 nCells[4].innerHTML = '<a class="text-success0 f-s-12">'+ tot1 +'% average <span class="badge badge">B</span></a>';
            }
            else { nCells[4].innerHTML = '<a class="text-success1 f-s-12">'+ tot1 +'% average <span class="badge badge">A</span></a>';};
            
            
            var wei = 0;
            var owei = 0;
            for ( var c=iStart ; c<iEnd ; c++ ){
              wei += aaData[ aiDisplay[c] ][6]*1;
              owei += aaData[ aiDisplay[c] ][7]*1;
            }
            console.log(owei);
            var numb4 = (parseFloat(wei * 100)/100)/iEnd;
            var tot4 = roundToTwo(numb4);
            return nCells[5].innerHTML = '<a class="text-inverse f-s-14">'+ parseInt(wei * 100)/100 +'</a><a class="text-muted f-s-10"> / '+ parseInt(owei * 100)/100 +' total</a>';
            
   
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