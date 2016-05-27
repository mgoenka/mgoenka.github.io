

    // Altus ALM Constants/Invariants/Rules
    EntityTypeEnum = {
    UNKNOWN :                             0,
    OPEN_STRATUS :                         1,        //.dev.ebayc3.com && ci-
    CI_API :                             2,        //ebayci
    STRATUS:                             3,        //.qa.ebay.com
    CONSUMER_ID_MARKET_PLACE:            4,        //ebay-marketplace-consumerid
    CONSUMER_ID_PAYPAL:                    5,        //paypal-consumerid
    STAGE_2:                             6,        //.qa.paypal.com
    NUMBER:                             7,        // NUMBER BASED SEARCH
    STRING:                             8,        // STRING BASED SEARCH
    GIT_EBAY:                             9,        // EBAY GIT github.corp.ebay.com
    GIT_PAYPAL:                         10        // EBAY PAYPAL github.paypal.com
    }

    //http://jsfiddle.net/unLSJ/
    var library = {};
    library.json = {
    replacer: function(match, pIndent, pKey, pVal, pEnd) {
      var key = '<span class=json-key>';
      var val = '<span class=json-value>';
      var str = '<span class=json-string>';
      var r = pIndent || '';
      if (pKey)
         r = r + key + pKey.replace(/[": ]/g, '') + '</span>: ';
      if (pVal)
         r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
      return r + (pEnd || '');
      },
    paintResult : function(data){
            $("#result").html(library.json.prettyPrint(data))
            library.json.linkit();
            $("#result").show();
    },
    linkit : function(){
            $.each($("#result > span.json-string"),
            function(i,v){
                var hyperLink = $(v).text();
                 if( hyperLink.indexOf("https://")>-1 || hyperLink.indexOf("http://")>-1 ){
                     var href = "<a target='_blank' href="+hyperLink+">"+hyperLink+"</a>";
                     $(v).html(href);
                 }
             }
         )
    },
    prettyPrint: function(obj) {
      var jsonLine = /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg;
      return JSON.stringify(obj, null, 3)
         .replace(/&/g, '&amp;').replace(/\\"/g, '&quot;')
         .replace(/</g, '&lt;').replace(/>/g, '&gt;')
         .replace(jsonLine, library.json.replacer);
      }
    };



    String.prototype.endsWith = function(suffix) {
    return this.indexOf(suffix, this.length - suffix.length) !== -1;
    };



    //Checks if the given searchString is a HTTP/HTTPS URL or not

    var isURL= function (searchString) {
        var isThisURL= false;
    if(searchString.indexOf("http://")>-1){
        searchString = searchString.replace("http://","");
        if(searchString.endsWith("/")){
            searchString = searchString.replace("/","");
            isThisURL= true;
        }
    }else if(searchString.indexOf("https://")>-1){
        searchString = searchString.replace("https://","");
        if(searchString.endsWith("/")){
            searchString = searchString.replace("/","");
            isThisURL= true;
        }
    }else if(searchString.indexOf("git@")>-1){
        searchString = searchString.replace("git@","");
        searchString = searchString.replace(":","/");
        searchString = searchString.replace(".git","");
        isThisURL= false;
    } else if(searchString.indexOf("/") > -1){
        searchString = searchString.replace("/","");
    }

    $("#searchString").val(searchString);
    return isThisURL;
    }



    // Detects which type of Entity the given search tearm is
    // Refer EntityTypeEnum

    var getEntityType = function(searchString){
    var entityType = undefined;
    if(searchString.indexOf("ebayci")>-1){
        entityType = EntityTypeEnum.CI_API;
    }else if ( (searchString.indexOf(".dev.ebayc3.com")>-1 && searchString.indexOf("ci-")>-1 ) || searchString.indexOf("stratus.dev.ebay.com")>-1 ) {
        entityType = EntityTypeEnum.OPEN_STRATUS;
    }else if(searchString.indexOf(".qa.ebay.com")>-1){
        entityType = EntityTypeEnum.STRATUS;
    }else if(searchString.indexOf("ebay-marketplace-consumerid")>-1){
        entityType = EntityTypeEnum.CONSUMER_ID_MARKET_PLACE;
    }else if(searchString.indexOf("paypal-consumerid")>-1){
        entityType = EntityTypeEnum.CONSUMER_ID_PAYPAL;
    }else if(searchString.indexOf("stage2")>-1){
        entityType = EntityTypeEnum.STAGE_2;
    }else if(searchString.indexOf("github.corp.ebay.com")>-1){
        searchString = searchString.replace("git@","");
        searchString = searchString.replace(":","/");
        searchString = searchString.replace(".git","");
        $("#searchString").val(searchString);
        entityType = EntityTypeEnum.GIT_EBAY;
    }else if(searchString.indexOf("github.paypal.com")>-1){
        searchString = searchString.replace("git\@","");
        searchString = searchString.replace(":","/");
        searchString = searchString.replace("\.git","");
        $("#searchString").val(searchString);
        entityType = EntityTypeEnum.GIT_PAYPAL;
    }else if(!isNaN(searchString) && Number(searchString) !=0 ){
        entityType = EntityTypeEnum.NUMBER;
    }else if(isNaN(searchString) && searchString != undefined ){
        entityType = EntityTypeEnum.STRING;
    }else {
        entityType = EntityTypeEnum.UNKNOWN;
    }
    return entityType;
    }
    //Resets the Search String & Result
    function reset(){
    $("#searchString").val("");
    $("#result").html("").hide();
    }
    function getAppCount(){
        $.get( $SCRIPT_ROOT +'/quic/api/metrics', function( data ) {

        $('#appCountValue').text(data.appCount);
        $('#usersValue').text(data.users);
        $('#ciValue').text(data.ci);
        $('#fpValue').text(data.fp);
        $('#poolsValue').text(data.pools);
        $('#raptorValue').text(data.raptor);
        $('#javaBatchValue').text(data.javaBatch);
        $('#drupalCMSValue').text(data.drupalCMS);
        $('#cubeJSValue').text(data.cubejs);
        //$('#Value').text(data.);
    });
    }

    function triggerSearch() {
        // $("#searchString").keyup(function(event){
            if(event.keyCode == 13){
                $("#searchBtn").click();
            }
        // });
    }

    // Searches Quic APIs and paints the UI

    function search(){
        var searchString =$("#searchString").val();
        $("#result").html("");
        $("#result").hide();
        searchString = $.trim(searchString)
        if(searchString!=""){
            if(isNaN(searchString)){
                //String Based Search
                var entityType = getEntityType(searchString);
                if(entityType){
                        isThisURL = isURL(searchString);
                        searchString = $("#searchString").val();
                        // isThisURL = true;
                     switch(entityType){
                         case EntityTypeEnum.STRATUS:

                                 //Searching Altus ALM
                                 handlers.fetchALMMachine(searchString);

                             break;

                         case EntityTypeEnum.OPEN_STRATUS:

                                 //Searching Altus ALM
                                 handlers.fetchALMMachine(searchString);

                             break;

                         case EntityTypeEnum.CI_API:

                                 //Searching Altus ALM
                                 searchString = searchString.replace("ebayci.qa.ebay.com","");
                                 if(searchString.indexOf("/") > -1){
                                     searchString = searchString.replace("/","");
                                 }
                                 $("#searchString").val(searchString)
                                 handlers.fetchEntityDetails(searchString);

                             break;

                         case EntityTypeEnum.STAGE_2:

                                 //Searching Altus ALM
                                 if(searchString.indexOf("/") > -1){
                                     searchString = searchString.replace("/","");
                                 } if (!searchString.endsWith("qa.paypal.com")){
                                     searchString += ".qa.paypal.com";
                                 }
                                 $("#searchString").val(searchString)

                                 // handlers.fetchALMMachine(searchString);
                                 handlers.fetchEntityDetails(searchString);
                             break;

                         case EntityTypeEnum.CONSUMER_ID_PAYPAL:

                             //Searching Altus DB by consumer ID
                             handlers.fetchByConsumerId(searchString);
                             break;

                         case EntityTypeEnum.CONSUMER_ID_MARKET_PLACE:

                             //Searching Altus DB by consumer ID
                             handlers.fetchByConsumerId(searchString);
                             break;
                         case EntityTypeEnum.STRING:

                                 var entitySearchResponse =     handlers.fetchEntityDetails(searchString);
                                 if ( true ){
                                        //TODO Handle Entity Name based search

                                 }else {
                                     //Searching CMPaaS
                                    handlers.fetchCMPaaSMachine(searchString);

                                 }
                             break;
                         case EntityTypeEnum.GIT_EBAY:

                             //Searching Altus DB by Git Repo
                             handlers.fetchByGitRepo(searchString);

                             break;

                            case EntityTypeEnum.GIT_PAYPAL:

                             //Searching Altus DB by Git Repo
                             handlers.fetchByGitRepo(searchString);

                             break;
                     }
                 }else{
                     //Search String is Number
                     //Search based on Number
                 }

        }
    }
    }

    //Handlers which query & paint the UI
    handlers = {

        //Search Altus ALM Machine Table and paint with details

        fetchALMMachine : function(searchString){
            $.get( "./quic/api/machine/"+searchString, function( data ) {
                if(data && !$.isEmptyObject(data)){
                    library.json.paintResult(data);
                    // $("#result").html(library.json.prettyPrint(data))
              //     $("#result").show();
                }else{
                    handlers.fetchCMPaaSMachine(searchString);
                }
        });
        },

        //Search CMPaaS Typeahead Search and paint with details

        fetchCMPaaSMachine : function(searchString){
            $.get( "./cmpaas/"+searchString, function( data ) {
            if(data){
                if(data){
                    // $("#result").html(library.json.prettyPrint(data))
                    // $("#result").show();
                    library.json.paintResult(data);
                }else{
                    $("#result").html("Ops No Data found in CMPaaS Either");
                    $("#result").show();
                }

            }
            });
        },

        //Search Quoc Entity Search by entity-name and paint with details

        fetchEntityDetails : function(searchString){
            $.get( "./quic/api/entity/name/"+searchString, function( data ) {
            if(data){
                if(data){
                    // $("#result").html(library.json.prettyPrint(data))
                    // $("#result").show();
                    library.json.paintResult(data);
                }else{
                    $("#result").html("Ops No Data found in Altus ALM");
                    $("#result").show();
                }

            }
            });
        },

        fetchByGitRepo : function(searchString){
            $.get( "./quic/api/search/app?gitRepo="+searchString, function( data ) {
            if(data){
                if(data){
                    // $("#result").html(library.json.prettyPrint(data))
                    // $("#result").show();
                    library.json.paintResult(data);
                }else{
                    $("#result").html("Ops No Data found in Altus ALM");
                    $("#result").show();
                }

            }
            });
        },


        ////Search Altus ALM Application Table based on Consumer Id and paint with details

        fetchByConsumerId : function(searchString){
            $.get( "./quic/api/consumerId/"+searchString, function( data ) {
                if(data && !$.isEmptyObject(data)){
                //     $("#result").html(library.json.prettyPrint(data))
                // $("#result").show();
                library.json.paintResult(data);
                }else{
                    $("#result").html("Ops No Data found in Altus ALM");
                $("#result").show();
                }
        });
        }
    };