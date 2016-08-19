
var handleDataTableScroller = function() {
	"use strict";
    var iTotalMarket = 0;
    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            
            sAjaxSource:    "../assets/dviews.json",
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
                              "aTargets": [ 5 ],
                              "bSortable": true,
                              "mRender": function ( url, type, full )  {    if      (url < 11){
                                                                                 return  '<a class="text-inverse"><strong><span class="badge badge-success badge-square">' + url + '</span></strong></a>';
                                                                                        }
                                                                            else if (url < 21){
                                                                                 return  '<a class="text-inverse"><strong><span class="badge badge-warning badge-square">' + url + '</span></strong></a>';
                                                                                        }
                                                                            else {
                                                                                 return  '<a class="text-inverse"><strong><span class="badge badge-danger badge-square">' + url + '</span></strong></a>';
                                                                                       }
                                                                        }
                            },
                            {
                              "aTargets": [ 6 ],
                              "bSortable": false,
                              "mRender": function ( url, type, full )  {
                                                                            return  '<a onclick="editg('+url+')" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>\n\
                                                                                     <a href="../deld/'+ url +'" class="btn btn-xs btn-warning "><i class="fa fa-trash-o"></i></a>';
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
            nCells[3].innerHTML = '';
            nCells[4].innerHTML = '';
            var perc = 0;
            for ( var c=iStart ; c<iEnd ; c++ )
            { perc += aaData[ aiDisplay[c] ][5]*1;
            }
            
            var numb3 = parseInt(perc * 100)/100;
            var tot1 = roundToTwo(numb3);
            if(tot1 <= 60 ){
                 nCells[5].innerHTML = '<a class="text-danger f-s-12">'+ tot1 +'</a>';
            }
            else if(tot1 <= 80 ){
                 nCells[5].innerHTML = '<a class="text-warning f-s-12">'+ tot1 +'</a>';
            }
            else if(tot1 <= 100 ){
                 nCells[5].innerHTML = '<a class="text-success0 f-s-12">'+ tot1 +'</a>';
            }
            else { nCells[5].innerHTML = '<a class="text-success1 f-s-12">'+ tot1 +'</a>';};
            
            
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