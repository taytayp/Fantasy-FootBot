 var lgs = {"NFL":{"a":1940,"b":2016,"c":2000,"d":2016,"e":1922,"f":2016,"g":2000,"h":2017,"j":1922,"k":2017,"l":1922,"m":2017,"n":1960,"o":2017,"p":1996,"q":2017},"AFL":{"a":1960,"b":1969,"e":1960,"f":1969,"j":1960,"k":1969,"l":1960,"m":1969,"n":1960,"o":1966},"AAFC":{"a":1946,"b":1949,"e":1946,"f":1949,"j":1946,"k":1949,"l":1946,"m":1949},"APFA":{"e":1920,"f":1921,"j":1920,"k":1921,"l":1920,"m":1921},"NFLE":{"a":1998,"b":2007,"e":1998,"f":2007,"j":1998,"k":2007,"l":1998,"m":2007,"p":2004,"q":2007},"WLAF":{"a":1991,"b":1997,"e":1991,"f":1997,"j":1991,"k":1997,"l":1991,"m":1997}};


 var STATUS_FINAL = 1;

 function resetStatsForm ()
 {
   var sY = $("#fld_statyr").val();
   if (lgs[$("#fld_statlg").val()].a && lgs[$("#fld_statlg").val()].b)
   {
     $("#fld_statyr").empty();
     for (var y = lgs[$("#fld_statlg").val()].b; y >= lgs[$("#fld_statlg").val()].a; y--) { $("#fld_statyr").append($("<option></option>").attr("value",y).text(y)); }
     if (sY>=lgs[$("#fld_statlg").val()].a && sY<=lgs[$("#fld_statlg").val()].b) { $("#fld_statyr").val(sY); }
     $("#fld_statyr").selectpicker("refresh");
   }
   resetConfOpts();
 }

 function resetConfOpts ()
 {
   var sL = $("#fld_statlg").val();
   var sY = $("#fld_statyr").val();
   var sC = $("#fld_statconf").val();
   $("#fld_statconf option:gt(0)").remove();
   if ($("#fld_statlg").val()=="NFL" && $("#fld_statyr").val()>1969)
   {
     $("#fld_statconf").append($("<option></option>").attr("value","AFC").text("AFC Only"));
     $("#fld_statconf").append($("<option></option>").attr("value","NFC").text("NFC Only"));
   }
   if (sL=="NFL" && (sC=="AFC" || sC=="NFC") && sY>1969) { $("#fld_statconf").val(sC); }
   $("#fld_statconf").selectpicker("refresh");
 }

 function resetStandingsForm ()
 {
   var sY = $("#fld_standyr").val();
   if (lgs[$("#fld_standlg").val()].e && lgs[$("#fld_standlg").val()].f)
   {
     $("#fld_standyr").empty();
     for (var y = lgs[$("#fld_standlg").val()].f; y >= lgs[$("#fld_standlg").val()].e; y--) { $("#fld_standyr").append($("<option></option>").attr("value",y).text(y)); }
     if (sY>=lgs[$("#fld_standlg").val()].e && sY<=lgs[$("#fld_standlg").val()].f) { $("#fld_standyr").val(sY); }
     $("#fld_standyr").selectpicker("refresh");
   }
 }

 function resetScoresForm ()
 {
   var sY = $("#fld_scoreyr").val();
   if (lgs[$("#fld_scorelg").val()].l && lgs[$("#fld_scorelg").val()].m)
   {
     $("#fld_scoreyr").empty();
     for (var y = lgs[$("#fld_scorelg").val()].m; y >= lgs[$("#fld_scorelg").val()].l; y--) { $("#fld_scoreyr").append($("<option></option>").attr("value",y).text(y)); }
     if (sY>=lgs[$("#fld_scorelg").val()].l && sY<=lgs[$("#fld_scorelg").val()].m) { $("#fld_scoreyr").val(sY); }
     $("#fld_scoreyr").selectpicker("refresh");
   }
 }

 function resetSeasonsForm ()
 {
   var sY = $("#fld_seasonyr").val();
   if (lgs[$("#fld_seasonlg").val()].j && lgs[$("#fld_seasonlg").val()].k)
   {
     $("#fld_seasonyr").empty();
     for (var y = lgs[$("#fld_seasonlg").val()].k; y >= lgs[$("#fld_seasonlg").val()].j; y--) { $("#fld_seasonyr").append($("<option></option>").attr("value",y).text(y)); }
     if (sY>=lgs[$("#fld_seasonlg").val()].j && sY<=lgs[$("#fld_seasonlg").val()].k) { $("#fld_seasonyr").val(sY); }
     $("#fld_seasonyr").selectpicker("refresh");
   }
 }

 function resetDraftForm ()
 {
   var sY = $("#fld_draftyr").val();
   if (lgs[$("#fld_draftlg").val()].n && lgs[$("#fld_draftlg").val()].o)
   {
     $("#fld_draftyr").empty();
     for (var y = lgs[$("#fld_draftlg").val()].o; y >= lgs[$("#fld_draftlg").val()].n; y--) { $("#fld_draftyr").append($("<option></option>").attr("value",y).text(y)); }
     if (sY>=lgs[$("#fld_draftlg").val()].n && sY<=lgs[$("#fld_draftlg").val()].o) { $("#fld_draftyr").val(sY); }
     $("#fld_draftyr").selectpicker("refresh");
   }
 }

 function resetBoxscoresForm ()
 {
   var sY = $("#fld_boxyr").val();
   if (lgs[$("#fld_boxlg").val()].p && lgs[$("#fld_boxlg").val()].q)
   {
     $("#fld_boxyr").empty();
     for (var y = lgs[$("#fld_boxlg").val()].q; y >= lgs[$("#fld_boxlg").val()].p; y--) { $("#fld_boxyr").append($("<option></option>").attr("value",y).text(y)); }
     if (sY>=lgs[$("#fld_boxlg").val()].p && sY<=lgs[$("#fld_boxlg").val()].q) { $("#fld_boxyr").val(sY); }
     $("#fld_boxyr").selectpicker("refresh");
   }
 }

 function getScores ()
 {
   var inprogress = 0;
   $.ajax({
     type: "GET",
     url: "/data/gamescores.php",
     //data: "yr=2014&lg=NFL&wk=5&type=pre",
     success: function (data) {
       $.each(data, function(i, v){
         $("#vscore_"+v.gameid).html(v.scorev);
         $("#hscore_"+v.gameid).html(v.scoreh);
         //$("#gclock_"+v.gameid).html(v.clock);
         $("#gstatus_"+v.gameid).html(v.gamestatus);
         if (v.status==STATUS_FINAL && v.gameurl!="")
         {
           //$("#gameurl_"+v.gameid).html('<a href="'+v.gameurl+'">Box</a>');
           if ($("#posturl_"+v.gameid).length > 0) { $("#posturl_"+v.gameid).html('<a href="'+v.gameurl+'">Boxscore</a>'); }
           else { $("#gameurl_"+v.gameid).html('<a href="'+v.gameurl+'">Box</a>'); }
         }
         if (v.status!=STATUS_FINAL) { inprogress++; }
       });
     }
   });

   //if (inprogress==0) { clearTimeout(scoreboardTimer); }
 }

 $(document).ready(function() {

   if ($("#nextgame").length && $("#lastgame").length)
   {
     if ($("#lastgame").height() > $("#nextgame").height()) { $("#nextgame").height($("#lastgame").height()); }
     else { $("#lastgame").height($("#nextgame").height()); }
   }

   if ($("#rightcol #divFeatured").length > 0 && $("#rightcol #divLiveStandings").length > 0)
   {
     var fpos = $("#rightcol #divFeatured").position();
     var spos = $("#rightcol #divLiveStandings").position();
     var fbot = fpos.top + $("#rightcol #divFeatured").height();
     if (spos.top+$("#rightcol #divLiveStandings").height() < fbot) { $("#rightcol #divLiveStandings").height(fbot-spos.top); }
   }

   $("[id*='_btndiv_']").click(function(){
     var p = $(this).attr("id").split("_")
     var curconf = $("#"+p[0]+"_btnconf_n").hasClass("selconf") ? "n" : "a";
     var showtype = curconf + p[2];
     $("[id^='"+p[0]+"_ls_']").each(function(){ $(this).hide(); });
     $("#"+p[0]+"_ls_"+showtype).fadeIn();
   });

   $("[id*='_btnconf_']").click(function(){
     var p = $(this).attr("id").split("_")
     var curdiv = $("#"+p[0]+"_divbtns input[type='radio'][name='"+p[0]+"_division']:checked").val();
     var showtype = p[2] + curdiv;
     $("[id^='"+p[0]+"_btnconf_']").each(function(){ $(this).removeClass("selconf"); });
     $(this).addClass("selconf");
     $("[id^='"+p[0]+"_ls_']").each(function(){ $(this).hide(); });
     $("#"+p[0]+"_ls_"+showtype).fadeIn();
     return false;
   });

   $("[id*='_btnstat_']").click(function(){
     var p = $(this).attr("id").split("_");
     $("[id*='_btnstat_']").each(function(){ $(this).removeClass("active"); });
     $("[id^='"+p[0]+"_sw_']").each(function(){ $(this).hide(); });
     $("#"+p[0]+"_sw_"+p[2]).fadeIn();
     $(this).addClass("active");
   });

   $("[id^='expand_']").click(function(){
     var cls = $(this).attr('id').replace(/^expand_/, "");
     if ($(this).attr("src").match(/minus/)) { $("."+cls).hide(); $(this).attr("src", "/images/plus.gif"); }
     else { $("."+cls).show(); $(this).attr("src", "/images/minus.gif"); }
   });

   //if ($("#liveScoreboard").length==1)
   $("#liveScoreboard").each(function(){
     // Every 120 seconds
     var scoreboardTimer = setInterval("getScores()", 120000);
   });

   $(".selectpicker").selectpicker({
     style: "btn-footballdb btn-smxs",
   });

   $("#formTeams #fld_team").change(function(){
     window.location = $(this).val();
   });

   $("#formCollegeTeams #fld_collteam").change(function(){
     window.location = $(this).val();
   });

   $("#fld_prospects_season").change(function(){
     if ($(this).val()!="") { $("#form_prospects_season").submit(); }
   });

   $("#fld_prospects_letter").change(function(){
     if ($(this).val()!="") { $("#form_prospects_letter").submit(); }
   });

   $("#fld_prospects_pos").change(function(){
     if ($(this).val()!="") { $("#form_prospects_pos").submit(); }
   });

   $("#fld_prospects_cid").change(function(){
     if ($(this).val()!="") { $("#form_prospects_cid").submit(); }
   });

   $("#formMatchups").submit(function(){

     if ($("#fldMatchupTeam").val()=="" || $("#fldMatchupOpp").val()=="" || $("#fldMatchupTeam").val()==$("#fldMatchupOpp").val())
     {
       alert("Please select a valid matchup to continue.");
       return false;
     }

     var tmparams = $("#fldMatchupTeam").val().split("|");
     var oppparams = $("#fldMatchupOpp").val().split("|");
     window.location = "/teams/nfl/" + tmparams[1] + "/teamvsteam?opp=" + oppparams[0];
     return false;
   });

   $("[id^='btnDivToggle_']").click(function(){
     var divid = $(this).attr('id').replace(/^btnDivToggle_/, "");
     $("[id^='btnDivToggle_']").each(function(){ $(this).removeClass("active"); });
     $(this).addClass("active");
     $("[id^='divToggle_']").each(function(){ $(this).hide(); });
     $(".divToggle_"+divid).removeClass("hidden-xs").fadeIn();
   });

/*
   $("#featureCycle").cycle({
     speed: 1000,
     timeout: 8000
   });
*/

 });
