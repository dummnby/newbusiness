
	<!-- 공지 Modal-->
    <div class="modal fade" id="2Modal" tabindex="-1" role="dialog" aria-labelledby="1:1ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="1:1ModalLabel">긴급 공지 사항</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

		  1. 09월 29일부터 10월 07일까지 서버 증설,점검 안정화 작업으로 유료전환, 연장이 일시 중지 됩니다.<br><br>
		  2. 서비스 사용에 지장은 없습니다. <br><br>
		  3. 해당기간에 만료 되는 계정은 9월 29일 이전에 연장해 주시면 만료일 기준으로 연장 됩니다.
		 
 		  </div>         
        </div>
      </div>
    </div>

	<!-- 약관 Modal-->
    <div class="modal fade" id="regionalModal" tabindex="-1" role="dialog" aria-labelledby="regionalModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="regionalModal">Newbusiness.co.kr 이용약관</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"><font size="2px">
		  <p>Newbusiness.co.kr에 오신것을 환영합니다.</p>
		  <p>서비스를 이용함으로써 귀하는 본 약관에 동의하게 되므로 본 약관을 주의 깊게 읽어보시기 바랍니다.</p>
		  <p></p>
		  <p>귀하는 서비스 내에서 적용되는 모든 정책을 준수해야 합니다.</p>
		  <p></p>	
  		  <p>Newbusiness.co.kr에서는 어떠한 개인 정보도 받지 않습니다.</p>
		  <p></p>	
  		  <p>Newbusiness.co.kr에서는 과도한 트래픽 발생을 방지 하기 위하여 중복 로그인을 허용하지 않습니다.</p>
		  <p></p>	
  		  <p>이메일 형식의 아이디는 단순 아이디일 뿐 이메일의 유효성은 검사하지 않습니다.</p>
		  <p></p>	
  		  <p>아이디와 비밀번호는 MD5 복호화 되어 저장됩니다. 분실시 재발급 및 찾기가 불가능 합니다.</p>
		  <p></p>	
  		  <p>Newbusiness.co.kr에서는 제공하는 자료 출처는 AI를 이용한 최적화된 검색방식으로 공정거래 위원회,지방자치단체 등 국가에서 오픈한 데이터 및 인터넷상에 노출된 데이터 입니다. 데이터 사용에 관한 모든 민,형 소송은 사용자에게 있습니다.
		  <p></p>	
  		  <p>Newbusiness.co.kr는 유료 전환시 모든 정보가 노출 되기 때문에 환불은 불가능 하지만 부득이할 경우 세팅비용을 제외한 사용금액에 비하여 가능 합니다.</p>
		  <p></p>	
  		  <p>Newbusiness.co.kr서비스는 예고없이 중지 될 수 있고 환불은 일할 차감되어 진행 됩니다.</p>		  
		  <b>위 약관에 동의 하고 서비스를 이용 하겠습니다. <input type="checkbox" name="regional" id="regional" value='y'></b>
		  </div>
        </div>
      </div>
    </div>
    <!-- 1:1 Modal-->
    <div class="modal fade" id="1Modal" tabindex="-1" role="dialog" aria-labelledby="1:1ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="1:1ModalLabel">1:1문의</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <p>1:1 문의는 <font color="red"><b>평일 오전 11시 부터 오후 4시 까지</b></font> 진행됩니다. <br><font color="red"><b>반드시 수신 가능한 메일주소</font></b>를 사용해주세요. <br>내용및 메일 주소는 저장되지 않습니다.</p>
		  <font color="red" size="4px"><b>전화상담은 불가한점 양해 부탁 드립니다.</b></font><br><br>
		  
		  <p>답변 받을 곳 <input name="requestid" class="form-control" style="width:350px;margin-left:32px" value="<?=$_SESSION['id']?>" type="text"> </p>
		  <p>문의 내용 <textarea name="request" class="form-control"  style="width:350px;height:200px;margin-left:50px"></textarea></p>
 		  </div>
          <div class="modal-footer center" >
			<input value="보내기" type="button" onclick="javascript:sendquestion()"  class="btn btn-default" style="text-align:center">
          </div>
        </div>
      </div>
    </div>

    <!-- charge Modal-->
    <div class="modal fade" id="chargeModal" tabindex="-1" role="dialog" aria-labelledby="chargeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="chargeModalLabel">유료전환</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <p>유료서비스를 이용함으로써 귀하는 본 약관에 동의하게 되므로 본 약관을 주의 깊게 읽어보시기 바랍니다.</p>
		  <p></p>
		  <p>귀하는 서비스 내에서 적용되는 모든 정책을 준수해야 합니다.</p>
		  <p></p>
		  <p><b><font color="red">유료 전환시 ***은 제거 되고 엑셀 다운 로드가 가능해 집니다.</font></b></p>
  		  <p><b><font color="navy">사업자 정보 보호 정책 개정으로 신규,신규업데이트 일부 사업장의 세부 주소공개가 불가능해 졌습니다.</font></b></p>
		  <p></p>
  		  <p>Newbusiness.co.kr에서는 과도한 트래픽 발생을 방지 하기 위하여 중복 로그인을 허용하지 않습니다.</p>
		  <p></p>	
  		  <p>Newbusiness.co.kr에서는 제공하는 자료 출처는 AI를 이용한 최적화된 검색방식으로 공정거래 위원회,지방자치단체 등 국가에서 오픈한 데이터 및 인터넷상에 노출된 데이터 입니다. 데이터 사용에 관한 모든 민,형 소송은 사용자에게 있습니다.
  		  <p>Newbusiness.co.kr는 유료 전환시 모든 정보가 노출 되기 때문에 환불은 불가능 합니다.</p>
		  <p></p>	
  		  <p>Newbusiness.co.kr서비스는 예고없이 중지 될 수 있고 환불은 일할 차감되어 진행 됩니다.</p>		  
		  <p>지금 신청 하시면 <font color="red"><b><?=date('Y-m-d', strtotime(date(Ymd).' +1 month'))?></b></font> 까지 유료 전환 됩니다.</p>
		  <p></p>
  		  <p>브라우져는 가급적 <font color="red"><b>크롬</font></b>을 사용해 주세요</p>
		  <p></p>
		  <p><hr></hr></p>
		  <p>※무통장 입금시</p>
		  <p>꼭 반드시 회신 가능한 메일로 신청 해주세요</p>
		  <p><font color="red" size="3px"><b>입금 후 약10분 뒤 재로그인 및 메일을 확인 해주세요.<br>(업무시간 외에는 지연될 수 있음니다.)</font></b></p>
		  <p>이용 금액 : <font size="4px" color="navy"><b> 신규 월10만원(초기세팅비포함, 계산서 발급 불가) <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 연장 월 5만원(계산서발급불가) </font></b><br> 다운로드, 카테고리,날자 제한 없음 </p>
		  <p>입금 계좌 : <font size="4px" color="red"><b> 국민은행 215-21-0911-764 이아람</font></p>
		  <p></p>
		  <p>입금자 <input name="charge_name" class="form-control" style="width:350px;margin-left:40px" value="" type="text"></p>
		  <p>입금 예정일 <input name="charge_day" class="form-control" style="width:350px;margin-left:10px" value="<?=date('Y-m-d')?>" type="text"></p>
		  <p></p>
		  <p>전환 아이디 <input name="charge_id" class="form-control" style="width:350px;margin-left:10px" value="<?=$_SESSION['id']?>" type="text"></p>
  		  <p>요청 사항<textarea name="charge_request" class="form-control"  style="width:350px;height:200px;margin-left:27px"></textarea></p>
<!--
계산서 발급 요청시
사업자명 : 
사업자번호 : 
대표자 :
이메일 : 
-->
 		  </div>
          <div class="modal-footer center" >
			<label><input type="checkbox" name="agree" id="agree"> 유료 서비스 약관 동의 후
			<input value="신청하기" type="button" onclick="javascript:send_charge()"  class="btn btn-default" style="text-align:center"></label>
          </div>
        </div>
      </div>
    </div>
    <!-- exten Modal-->
    <div class="modal fade" id="extenModal" tabindex="-1" role="dialog" aria-labelledby="extenModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="extenModalLabel">연장신청</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <p><b>연장 신청 하시면 만료일기준으로 연장 됩니다.</b></p>
		  <p></p>
		  <p><hr></hr></p>
		  <p>입금 금액 : <font size="4px" color="blue"><b>월 5만원 (계산서발급불가) </p></font>
		  <p><font color="red" size="3px"><b>입금 후 약10분 뒤 재로그인 및 메일을 확인 해주세요.<br>(업무시간 외에는 지연될 수 있음니다.)</font></b></p>
		  <p>입금 계좌 : 국민은행 215-21-0911-764 이아람</p>
		  <p>입금자 <input name="exten_name" class="form-control" style="width:350px;margin-left:40px" value="" type="text"></p>
		  <p>입금 예정일 <input name="exten_day" class="form-control" style="width:350px;margin-left:10px" value="<?=date('Y-m-d')?>" type="text"></p>
		  <p></p>
		  <p>연장 아이디 <input name="exten_id" class="form-control" style="width:350px;margin-left:10px" value="<?=$_SESSION['id']?>" type="text"></p>
  		  <p>요청 사항<textarea name="exten_request" class="form-control"  style="width:350px;height:200px;margin-left:27px"></textarea>
		  
<!--
계산서 발급 요청시
사업자명 : 
사업자번호 : 
대표자 :
이메일 : 		  
-->
		  </p>
 		  </div>
          <div class="modal-footer center" >
			<input value="신청하기" type="button" onclick="javascript:send_exten()"  class="btn btn-default" style="text-align:center">
          </div>
        </div>
      </div>
    </div>

    <!-- LandingAdd Modal-->
    <div class="modal fade" id="LandingAdd" tabindex="-1" role="dialog" aria-labelledby="LandingAddLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="LandingAddLabel">랜딩페이지 생성</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <p><b>아래 빈칸을 채우시면 랜딩 페이지가 생성 됩니다.</b></p>
		  <p>트래픽 문제로 파일 업로드는 제공하지 않습니다.<br>메인 이미지링크는 호스팅을 이용하시거나 다음 블로그를 이용 하세요<br></p>
		  <p>유료 회원은 유료 기간내 무제한 사용 할 수 있습니다.</p>
		  <p>무료 회원은 1건만 사용 할 수 있습니다.</p>
		  <p>네이버 웹마스터에 등록시 스크립트 삽입 세팅비가 발생 됩니다. (1만원 건당)</p>
		  <p></p>
		  <p>업체명<input name="Landingname" class="form-control" style="width:350px;margin-left:48px;" value="" type="text"></p>
		  <p>업주명<input name="Landingowner" class="form-control" style="width:350px;margin-left:48px;" value="" type="text"></p>
		  <p>메인이미지<input name="Landingbody" class="form-control" style="width:350px;margin-left:22px" type="text"></p>
		  <p>업체이메일<input name="Landingemail" class="form-control" style="width:350px;margin-left:22px" type="text"></p>
		  <p>업체전화번호<input name="Landingtel" class="form-control" style="width:350px;margin-left:10px" type="text"></p>
		  <p>업체주소<input name="Landingaddress" class="form-control" style="width:350px;margin-left:39px" type="text"></p>
  		  <p>네이버맵HTML태그<textarea name="Landingmap" class="form-control"  style="width:315px;height:100px;margin-left:12px"></textarea></p>
 		  </div>
          <div class="modal-footer center" >
			<input value="생성하기" type="button" onclick="javascript:LandingAdd()"  class="btn btn-default" style="text-align:center">
          </div>
        </div>
      </div>
    </div>


    <!-- prwarring Modal-->
    <div class="modal fade" id="pwarringModal" tabindex="-1" role="dialog" aria-labelledby="pwarringModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pwarringModalLabel"><font color="red">주의사항</font></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
		  <p>최근 구글등 포털에 등록되거나 웹페이지가 제작된 업체를 분석한 데이터 입니다.</p>
		  <p>프로그램은 수시로 수정 됩니다.</p>
		  <p>시스템에 어마무시한 부하를 주기 때문에 <font color="red"><b>엑셀은 1일 5회로 제한</b></font> 합니다.</p>
		  <p>베타 버전이라 사전 예고 없이 중지 될 수 있습니다.</p>
		  <p>추후 상위 유료 서비스로 전환 될 수 있습니다.</p>
		  <p>수시로 업데이트 됩니다.</p>
<? /* ?>
		  <p><hr></hr></p>
		  <p>입금 금액 : <font color="red"><b>월20만원</b></font> (모든서비스이용)</p>
		  <p>입금 계좌 : 국민은행 215-21-0911-764 이아람</p>
		  <p>입금자 <input name="pcharge_name" class="form-control" style="width:350px;margin-left:40px" value="" type="text"></p>
		  <p>입금 예정일 <input name="pcharge_day" class="form-control" style="width:350px;margin-left:10px" value="<?=date('Y-m-d')?>" type="text"></p>
		  <p></p>
		  <p>신청 아이디 <input name="pcharge_id" class="form-control" style="width:350px;margin-left:10px" value="<?=$_SESSION['id']?>" type="text"></p>
  		  <p>요청 사항<textarea name="pcharge_request" class="form-control"  style="width:350px;height:100px;margin-left:27px"></textarea></p>
 		  </div>
          <div class="modal-footer center" >
			<input value="신청하기" type="button" onclick="javascript:send_exten()"  class="btn btn-default" style="text-align:center">
          </div>
<? */ ?>
        </div>
      </div>
    </div>



	</form>
	<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © newbusiness.co.kr</small>
        </div>
      </div>
    </footer>
	<iframe name='hframe' width="0" height="0" frameborder="0"></iframe>
	<script type="text/javascript">
		
		function mail_log() {
		
			f = document.f;	
			window.open('./mail_log.html','log','width=500px,height=600px','scrollbars=0,menubar=no,toolbar=no,location=no,status=no');		
		}

		function send_mail() { 

			f = document.f;
			
			if( !f.cate.value ) { alert('카테고리를 선택해 주시요'); return false(); }

			window.open('./send_mail.html?referer=<?=$_SERVER['PHP_SELF']?>&cate1=<?=$_GET['cate1']?>','send','width=500px,height=600px','scrollbars=0,menubar=no,toolbar=no,location=no,status=no');		
		}

		function join(){

			ck = f.regional.checked;
			strValue = f.id.value;
			var regExp = /[0-9a-zA-Z][_0-9a-zA-Z-]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;

			if( !ck ) { alert('약관에 동의 해주세요'); return false; }

			if( !strValue ) { alert('사용하실 아이디를 입력 하세요'); f.id.focus(); return false; }
		
			if ( !strValue.match( regExp ) ) { alert('아이디를 입력 하세요'); f.id.focus(); return false; }

			if( !f.pw.value ) { alert('사용하실 비밀번호를 입력 하세요'); f.pw.focus(); return; }

			if ( confirm( f.id.value+"으로 가입 하시겠습니까?" ) == true ){  
				document.f.mode.value='join';
				document.f.submit();
			} else {  
				return;
			}		
		}

		function logout(){
			document.f.mode.value = 'logout';
			document.f.submit();
			document.parent.location="./";
		}

		function login(){ 
			document.f.mode.value = 'login';
			document.f.submit();
		}
		
		function sendquestion() {

			document.f.mode.value = "request";
			document.f.target = 'hframe';
			document.f.action = './';
			document.f.submit();
			$("#1Modal").modal("hide");
		}

		function send_charge() {

		var chk = document.f.agree.checked;
		if(!chk) { alert('유료 서비스 약관에 동의해 주세요'); return false(); } 
		if(!document.f.charge_name.value) { alert('입금자를 입력해주세요'); return false(); } 
			document.f.mode.value = "charge";
			document.f.target = 'hframe';
			document.f.action = './';
			document.f.submit();
			$("#chargeModal").modal("hide");
		}
		function send_exten() {
		if(! f.exten_name.value ) { alert('입금자를 입력해주세요'); return false(); } 
			document.f.mode.value = "exten";
			document.f.target = 'hframe';
			document.f.action = './';
			document.f.submit();
			$("#extenModal").modal("hide");
		}
		function LandingAdd() {
			document.f.mode.value = "LandingAdd";
			document.f.target = 'hframe';
			document.f.action = './Landing.html';
			document.f.submit();
			$("#LandingAdd").modal("hide");
		}

	</script>