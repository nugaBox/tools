<div class="animated fadeIn">
    <div id="content">
        <div class="row" id="worshipListAll">
            <div class="worshipList" id="soo_10">
                <h3>수영로 주일설교 리스트</h3>
                <table class="table worshipTable">
                    <colgroup>
                        <col width="15%">
                        <col width="15%">
                        <col width="25%">
                        <col width="13%">
                        <col width="8%">
                        <col width="24%">
                    </colgroup>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">날짜</th>
                            <th scope="col">설교자</th>
                            <th scope="col">제목</th>
                            <th scope="col">본문</th>
                            <th scope="col">상세</th>
                            <th scope="col">텍스트 복사</th>
                        </tr>
                    </thead>
                    <tbody id="listData_soo_10"></tbody>
                </table>
                <a href="#" class="btn btn-warning btn-lg" id="viewAdd" tNum="1"><i class="fas fa-cloud-download-alt"></i> 더보기</a>
            </div>
            <div class="worshipList" id="soo_06">
                <h3>수영로 금요철야 리스트</h3>
                <table class="table worshipTable">
                    <colgroup>
                    <col width="15%">
                    <col width="15%">
                    <col width="25%">
                    <col width="13%">
                    <col width="8%">
                    <col width="24%">
                    </colgroup>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">날짜</th>
                            <th scope="col">설교자</th>
                            <th scope="col">제목</th>
                            <th scope="col">본문</th>
                            <th scope="col">상세</th>
                            <th scope="col">텍스트 복사</th>
                        </tr>
                    </thead>
                    <tbody id="listData_soo_06"></tbody>
                </table>
                <a href="#" class="btn btn-warning btn-lg" id="viewAdd" tNum="1"><i class="fas fa-cloud-download-alt"></i> 더보기</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-bible modal-icon"></i>  설교정보 상세 보기</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="worshipView infoView">
            <dl class="vInfo row">
                        <dt class="col-md-2 text-right">설교구분</dt>
                        <dd class="col-md-10"></dd>
                    </dl>
                    <dl class="vWriter row">
                        <dt class="col-md-2 text-right">설교자</dt>
                        <dd class="col-md-10"></dd>
                    </dl>
            <dl class="vRegdate row">
                        <dt class="col-md-2 text-right">날짜</dt>
                        <dd class="col-md-10"></dd>
                    </dl>
            <dl class="vTilte row">
                        <dt class="col-md-2 text-right">제목</dt>
                        <dd class="col-md-10"></dd>
                    </dl>
            <dl class="vBible row">
                        <dt class="col-md-2 text-right">본문</dt>
                        <dd class="col-md-10"></dd>
                    </dl>
            <dl class="vContent row">
                        <dt class="col-md-2 text-right">설교내용<br><div></div></dt>
                        <dd class="col-md-10"><textarea rows="10" class="form-control"></textarea></dd>
                    </dl>
                </div>
            </div>
            <div class="modal-footer">
        <div></div>
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times modal-icon"></i> Close</button>
            </div>
        </div>
    </div>
</div>