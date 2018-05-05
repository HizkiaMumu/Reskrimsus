@extends('master-zi')
@section('title', 'TIPIDKOR | WHISTLEBLOWER\'S SYSTEM')
@section('content')

<div id="mobilebgfix">
  <div class="mobile-bg-fix-img-wrap">
    <div class="mobile-bg-fix-img"></div>
  </div>
  <div class="mobile-bg-fix-whole-site">


<header id="home" class="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">


  <div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">

    <div class="container">

<center><a href="#" ><img src="/wp-content/uploads/2017/07/Logo-DIREKTORAT-u6.png" alt="Zona Integritas"></a></center>

      <!-- div class="navbar-header responsive-logo">

<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        </button>

        <a href="http://zi.tipidkorpolri.info/" class="navbar-brand"><img src="http://zi.tipidkorpolri.info/wp-content/uploads/2017/07/LOGO-DIREKTORAT-TIPIDKOR-u1.png" alt="Zona Integritas"></a>
      </div -->

    <!--	 	<nav class="navbar-collapse bs-navbar-collapse collapse" id="site-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <a class="screen-reader-text skip-link" href="#content">Skip to content</a>
    <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list"><li class="page_item page-item-22"><a href="http://zi.tipidkorpolri.info/daftar-laporan-pengaduan/">Daftar Laporan Pengaduan</a></li>
<li class="page_item page-item-872"><a href="http://zi.tipidkorpolri.info/kontak/">Kontak</a></li>
<li class="page_item page-item-40"><a href="http://zi.tipidkorpolri.info/manajemen-perubahan/">Manajemen Perubahan</a></li>
<li class="page_item page-item-54"><a href="http://zi.tipidkorpolri.info/mindset-dan-cultural-set-aparatur/">Mindset dan Cultural Set Aparatur</a></li>
<li class="page_item page-item-21"><a href="http://zi.tipidkorpolri.info/open-ticket/">Open Ticket</a></li>
<li class="page_item page-item-1480"><a href="http://zi.tipidkorpolri.info/paparan-pembangunan-zi/">Paparan Pembangunan ZI</a></li>
<li class="page_item page-item-46"><a href="http://zi.tipidkorpolri.info/penataan-sistem-manajemen-sdm/">Penataan Sistem Manajemen SDM</a></li>
<li class="page_item page-item-42"><a href="http://zi.tipidkorpolri.info/penataan-tatalaksana/">Penataan Tatalaksana</a></li>
<li class="page_item page-item-50"><a href="http://zi.tipidkorpolri.info/penguatan-akuntabilitas/">Penguatan Akuntabilitas</a></li>
<li class="page_item page-item-48"><a href="http://zi.tipidkorpolri.info/penguatan-pengawasan/">Penguatan Pengawasan</a></li>
<li class="page_item page-item-52"><a href="http://zi.tipidkorpolri.info/peningkatan-kualitas-pelayanan-publik/">Peningkatan Kualitas Pelayanan Publik</a></li>
<li class="page_item page-item-44"><a href="http://zi.tipidkorpolri.info/peraturan-perundang-undangan/">Peraturan Perundang-undangan</a></li>
<li class="page_item page-item-70"><a href="http://zi.tipidkorpolri.info/upload-dokumen/">Upload Dokumen</a></li>
<li class="page_item page-item-35"><a href="http://zi.tipidkorpolri.info/wbs/">WBS</a></li>
<li class="page_item page-item-24 current_page_item"><a href="http://zi.tipidkorpolri.info/whistleblowers-system/">WhistleBlower&#8217;s System</a></li>
</ul>	</nav>
      -->

    </div>

  </div>
    <!-- / END TOP BAR -->
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<div id="content" class="site-content">

  <div class="container">


    <div class="content-left-wrap col-md-12">


      <div id="primary" class="content-area">

        <main id="main" class="site-main">

          <article id="post-24" class="post-24 page type-page status-publish hentry">

	<header class="entry-header">

		<span class="date updated published">March 27, 2017</span>
		<span class="vcard author byline"><a href="#" class="fn">Admin</a></span>

		<h1 class="entry-title" itemprop="headline">WhistleBlower&#8217;s System</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<blockquote><p><strong>Whistleblowing System </strong>merupakan aplikasi yang disediakan oleh DITTIPIDKOR BARESKRIM POLRI bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan yang berindikasi pelanggaran yang terjadi di lingkungan Direktorat Tipidkor Republik Indonesia.</p></blockquote>
<hr />
    <div class="support_bs">
      <div class="tab-pane" id="wpsp_create_ticket_guest">
  <div id="create_ticket_container">
    <div id="loginContainer">
                <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#ticketContainer" onclick="wpsp_getGuestTicketForm();" id="tab_ticket_container" data-toggle="tab">Buat Laporan Pengaduan</a></li>
                    <li><a href="#FAQ_TAB" onclick="wpsp_getGuestFAQ();" id="tab_faq" data-toggle="tab">FAQs</a></li>
        </ul>
<div class="tab-content">
  <!-- FAQ Tab Body Start Here -->
  <div class="tab-pane" id="FAQ_TAB">
    <div class="faq_filter">
      <div class="faq_item">
  <table>
    <tr>
      <td>Category:
        <select id="filter_by_faq_category_front">
          <option value="all">All</option>
          <option value="1">General</option>				</select>
      </td>
                        <td>
                        <input type="text" id="filter_by_faq_search_front" placeholder="Search..." />
                        </td>
    </tr>
  </table>
</div>
    </div>
    <div id="faq_container"></div>
  </div>
  <!-- FAQ Tab Body End Here -->
  <!-- Tickets Tab Body Start Here -->
  <div class="tab-pane active" id="ticketContainer">
    <br>
      <form method="POST" action="/tipidkor/zona-integritas/wbs/tambah-wbs" enctype="multipart/form-data">
        {{ csrf_field() }}
        <span class="label label-info" style="font-size: 13px;">Nama Pelapor</span>
        <code>*</code>
        <br>
        <input class="wpsp_required" type="text" id="create_ticket_guest_name" name="nama_pelapor"  style="width: 95%; margin-top: 10px;" />
        <br><br>
        <span class="label label-info" style="font-size: 13px;">Email</span>
        <code>*</code>
        <br>
        <input class="wpsp_required" type="text" id="create_ticket_guest_email" name="email_pelapor"  style="width: 95%; margin-top: 10px;" />
        <br><br>
        <div id="wpsp_custom_5" class="" style="display:block">
          <span class="label label-info" style="font-size: 13px;">No.Telp</span>
          <code>*</code>
          <br>
          <input id="cust5" class="wpsp_required" type="text" name="nomor_telepon"  style="width: 95%; margin-top: 10px;"/>
          <br><br>
        </div>
        <span class="label label-info" style="font-size: 13px;">Judul / Nama kasus TPK yang ingin dilaporkan</span>
        <code>*</code>
        <br>
        <input class="wpsp_required" type="text" id="create_ticket_subject" name="judul_laporan"  style="width: 95%; margin-top: 10px;"/>
        <br><br>
        <span class="label label-info" style="font-size: 13px;">Uraian Pengaduan*</span>
        <code>*</code>
        <br>
        <textarea id="create_ticket_body_guest" name="uraian_pengaduan" style="margin-top: 10px; width: 95%;" ></textarea>
        <br><br>
        <div id="wpsp_custom_4" class="" style="display:block">
          <span class="label label-info" style="font-size: 13px;">Dugaan korupsi yang dilaporkan:</span>
          <code>*</code>
          <br>
          <select id="cust4" name="dugaan_korupsi" class="wpsp_required">
            <option value=""></option>
            <option value="Pengadaan Barang dan Jasa">Pengadaan Barang dan Jasa</option>
            <option value="Suap Menyuap">Suap Menyuap</option>
            <option value="Pemerasan atau Pungli">Pemerasan atau Pungli</option>
            <option value="Penggelapan Uang (Bendahara)">Penggelapan Uang (Bendahara)</option>
            <option value="Gratifikasi">Gratifikasi</option>
            <option value="BUMN/BUMD">BUMN/BUMD</option>
            <option value="Penyalahgunaan APBN/APBD">Penyalahgunaan APBN/APBD</option>
            <option value="Lainnya">Lainnya</option>
          </select>
          <br/><br/>
        </div>
        <div id="wpsp_custom_1" class="" style="display:block">
          <span class="label label-info" style="font-size: 13px;">Nama Pihak yang Terlibat</span>
          <code>*</code>
          <br>
          <input id="cust1" class="wpsp_required" type="text" name="nama_pihak_terlibat"  style="width: 95%; margin-top: 10px;"/>
          <br><br>
        </div>
        <div id="wpsp_custom_2" class="" style="display:block">
          <span class="label label-info" style="font-size: 13px;">Jabatan</span>
          <code>*</code>
          <br>
          <input id="cust2" class="wpsp_required" type="text" name="jabatan"  style="width: 95%; margin-top: 10px;"/>
          <br><br>
        </div>
        <div>
          <span class="label label-info hide_fields_support_plus" style="font-size: 13px;">Klasifikasi Jabatan</span>
          <code>*</code>
          <br>
          <select id="create_ticket_category" class="hide_fields_support_plus" name="klasifikasi_jabatan" style="margin-top: 10px;" onchange = "cat_wise_custom_field(this)">
            <option value=""></option>
            <option value="Anggota DPR/DPRD/DPD">Anggota DPR/DPRD/DPD</option>
            <option value="BUMN/BUMD">BUMN/BUMD</option>
            <option value="Kepala Daerah">Kepala Daerah</option>
            <option value="Lainnya">Lainnya</option>
            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
            <option value="Penegak Hukum">Penegak Hukum</option>
            <option value="Penyelenggara Negara">Penyelenggara Negara</option>
            <option value="Swasta">Swasta</option>
          </select>
          <br><br>
        </div>
        <div id="wpsp_custom_3" class="" style="display:block">
          <span class="label label-info" style="font-size: 13px;">Pihak Lain yang terlibat (optional) :</span>
          <br>
          <input id="cust3" type="text" name="pihak_lain_terlibat" style="width: 95%; margin-top: 10px;"/>
          <br><br>
        </div>
        <div>
          <span class="label label-info">Lampiran (file data/dokumen pendukung)</span>
          <br>
          <div class="wpsp_frm_attachment_container">
            <input type="file" id="wpsp_frm_attachment_input_create" class="wpsp_frm_attachment_input" name="lampiran_file_pendukung">
            <div id="wpsp_frm_attachment_copy_create" class="wpsp_frm_attachment" style="display: none;">
              <span class="wpsp_frm_attachment_name"></span>
              <br>
              <span class="wpsp_frm_attachment_percentage">[0%]</span>
              <span class="wpsp_frm_attachment_remove"></span>
            </div>
            <div id="wpsp_frm_attachment_list_create" class="wpsp_frm_attachment_list"></div>
            <div id="wpsp_frm_attachment_ids_container_create" class="wpsp_frm_attachment_ids_container"></div>
          </div>
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-success">
      </form>
                                                    <script type="text/javascript">
                        jQuery(document).ready(function(){
                                CKEDITOR.replace(document.getElementById('create_ticket_body_guest'));
                        });
                    </script>
                  </div>
  <!-- Tickets Tab Body End Here -->
</div>
	</div>		</div>


	</div><!-- .entry-content -->


</article><!-- #post-## -->
        </main><!-- #main -->

      </div><!-- #primary -->


    </div><!-- .content-left-wrap -->


  </div><!-- .container -->


</div><!-- .site-content -->


<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">


  <div class="container">


    <div class="col-md-3 company-details"><div class="icon-top red-text"><img src="/wp-content/themes/zerif-lite/images/map25-redish.png" alt="" /></div><div class="zerif-footer-address">Gedung ORI Lt. 1 &amp; 2 Jl. HR Rasuna Said
Kav C-19 Kuningan, Jakarta Selatan.</div></div><div class="col-md-3 company-details"><div class="icon-top green-text"><img src="/wp-content/themes/zerif-lite/images/envelope4-green.png" alt="" /></div><div class="zerif-footer-email"><a href="mailto:bagops.tpk@gmail.com">bagops.tpk@gmail.com</a></div></div><div class="col-md-3 company-details"><div class="icon-top blue-text"><img src="/wp-content/themes/zerif-lite/images/telephone65-blue.png" alt="" /></div><div class="zerif-footer-phone"><a href="tel:622122057190">+62-21-2205 7190</a></div></div><div class="col-md-3 copyright"><ul class="social"><li><a target="_blank" href="https://www.facebook.com/Tipidkor-Bareskrim-2096002183959907/"><span class="sr-only">Go to Facebook</span> <i class="fa fa-facebook"></i></a></li><li><a target="_blank" href="https://twitter.com/tipidkor"><span class="sr-only">Go to Twitter</span> <i class="fa fa-twitter"></i></a></li></ul><p id="zerif-copyright">Dit Tipidkor Bareskim</p></div>			</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->


  </div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->


<div style="display:none"><div class="cdm-modal" data-remodal-options="{ 'hashTracking': false }" data-remodal-id="file"> <a data-remodal-action="close" class="remodal-close"></a>
      <div class="view-file-content">

      </div>
    </div></div>
        <div style="display:none">
<div class="remodal" data-remodal-id="cdm-utility">
  <a data-remodal-action="close" class="remodal-close"></a>

  <div class="cdm-utility-modal">
  </div>
</div>
</div><div id="wpsp_front_popup" onclick="wpsp_close_front_popup();" style="display: none;"></div>
<div id="wpsp_front_popup_inner" style="display: none;">
    <div id="wpsp_front_popup_blank"></div>
    <div id="wpsp_front_popup_body" style="display: none;"></div>
</div>
<img id="wpsp_front_popup_close_btn" alt="Close Button" onclick="wpsp_close_front_popup();" style="display: none;" src="/wp-content/plugins/wp-support-plus-responsive-ticket-system/asset/images/close_btn.png"/>
<img id="wpsp_front_popup_loading_img" alt="Loading Image" style="display: none;" src="/wp-content/plugins/wp-support-plus-responsive-ticket-system/asset/images/ajax-loader%402x6a73.gif?ver=8.0.7"/><link rel='stylesheet' id='jquery-remodal-css'  href='../wp-content/plugins/sp-client-document-manager/css/jquery.remodal55fe.css?ver=4.9.5' type='text/css' media='all' />

@endsection
