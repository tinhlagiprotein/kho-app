<?php
$page_title = "TINHLAGI.PRO - Kho Ứng Dụng ATV";
$page_sub   = "Tổng hợp phần mềm cho Tivi/Box";

// Đã thêm trường 'link' riêng biệt cho từng ứng dụng
$r2 = 'https://pub-fb13fe1daa2c4cf0acf3075c535924da.r2.dev/app/';

$categories = [
    [
        'icon'  => '📺',
        'title' => 'TRUYỀN HÌNH - ⚽ ĐÁ BANH',
        'apps'  => [
		    ['abbr'=>'GE','color'=>'gold',  'name'=>'GetOut',  'ver'=>'v1.0.9', 'tag'=>'Miễn phí', 'sub'=>'Ứng dụng xem bóng đá miễn phí',  'code'=>'5761331', 'link'=>$r2.'Get_Out_1.0.9.apk'],
			['abbr'=>'SP','color'=>'green',  'name'=>'SportsTV_5.2.3.apk',   'ver'=>'v5.2.3',    'tag'=>'Miễn phí', 'sub'=>'SportsTV – xem thể thao IPTV',     'code'=>'8773122', 'link'=>$r2.'SportsTV_5.2.3.apk'],
            ['abbr'=>'SP','color'=>'green', 'name'=>'SportzX_2.1v','ver'=>'v2.1',   'tag'=>'Miễn phí', 'sub'=>'SportzX – xem thể thao trực tiếp', 'code'=>'4652958', 'link'=>$r2.'SportzX_2.1v.apk'],
            ['abbr'=>'CO','color'=>'teal',   'name'=>'CoTiViV1.1.7',         'ver'=>'v1.1.7',    'tag'=>'Miễn phí', 'sub'=>'Ứng dụng xem truyền hình cáp',        'code'=>'3897591', 'link'=>$r2.'Co_Tivi_1.1.7.apk'],
            ['abbr'=>'DL','color'=>'orange', 'name'=>'DLTV',                 'ver'=>'v1.8.5',    'tag'=>'Miễn phí', 'sub'=>'Tải & xem nội dung mọi kênh',          'code'=>'393939',        'link'=>$r2.'DLTV.apk'],
            ['abbr'=>'TV','color'=>'green',  'name'=>'TV365(Pach2)',         'ver'=>'v4.2.0',    'tag'=>'Miễn phí', 'sub'=>'Truyền hình 365 ngày – Pach 2',         'code'=>'393939',        'link'=>$r2.'TV365(Pach2).apk'],
            ['abbr'=>'VU','color'=>'indigo', 'name'=>'VuaMoiThay',           'ver'=>'v1.0.0',    'tag'=>'Miễn phí', 'sub'=>'Vua Mới Thay – truyền hình',            'code'=>'393939',        'link'=>$r2.'VuaMoiThay.apk'],
            ['abbr'=>'IM','color'=>'indigo', 'name'=>'iMedia_TV_25.04.06.B', 'ver'=>'v25.04.06', 'tag'=>'Miễn phí', 'sub'=>'Xem phim & truyền hình chất lượng cao', 'code'=>'393939',        'link'=>$r2.'iMedia_TV_25.04.06.B_(CÒN_XÀI_ĐƯỢC).apk'],
            ['abbr'=>'VA','color'=>'teal',   'name'=>'vAppTV',               'ver'=>'v1.0.0',    'tag'=>'Miễn phí', 'sub'=>'vAppTV – ứng dụng xem truyền hình',     'code'=>'393939',        'link'=>$r2.'vAppTV.apk'],
			['abbr'=>'VG','color'=>'rose',   'name'=>'VTVgoTV_v11.12.30',                   'ver'=>'v11.12.30','tag'=>'Miễn phí','sub'=>'VTVgo TV – xem VTV trên Tivi/Box',         'code'=>'393939', 'link'=>$r2.'VTVgoTV_v11.12.30.apk'],
            ['abbr'=>'VP','color'=>'orange', 'name'=>'VTVprime_v1.7.0',                     'ver'=>'v1.7.0', 'tag'=>'Miễn phí', 'sub'=>'VTV Prime – nội dung độc quyền VTV',       'code'=>'393939', 'link'=>$r2.'VTVprime_v1.7.0.apk'],
            ['abbr'=>'VI','color'=>'green',  'name'=>'VietPlay_TV_2.3_(bản_cũ)',             'ver'=>'v2.3',   'tag'=>'Miễn phí', 'sub'=>'VietPlay TV v2.3 bản cũ – còn xài được',   'code'=>'393939', 'link'=>$r2.'VietPlay_TV_2.3_(bản_cũ)_(CÒN_XÀI_ĐƯỢC).apk'],
        ],
    ],
 [
        'icon'  => '🎥',
        'title' => 'PHIM 4K',
        'apps'  => [
		    ['abbr'=>'4K','color'=>'gold',   'name'=>'Phim4K_v2.5.8_tivi',       'ver'=>'v2.5.8', 'tag'=>'Miễn phí', 'sub'=>'Phim 4K phiên bản Tivi/Box (.apk)',  'code'=>'4833418', 'link'=>$r2.'Phim4K_v.2.5.8_tivi.apk'],
            ['abbr'=>'4K','color'=>'indigo', 'name'=>'Phim4K_Windows_Portable',  'ver'=>'v2.4.0', 'tag'=>'Miễn phí', 'sub'=>'Phim 4K – Windows Portable (.zip)',  'code'=>'393939', 'link'=>$r2.'Phim4K_Windows_Portable.zip'],
       ['abbr'=>'4K','color'=>'orange', 'name'=>'Phim4K_v2.4.0.exe',        'ver'=>'v2.4.0', 'tag'=>'Miễn phí', 'sub'=>'Phim 4K phiên bản Windows (.exe)',   'code'=>'393939', 'link'=>$r2.'Phim4K_v2.4.0.exe'],
            ['abbr'=>'4K','color'=>'rose',   'name'=>'Phim4K_v2.4.0_Iphone',     'ver'=>'v2.4.0', 'tag'=>'Miễn phí', 'sub'=>'Phim 4K phiên bản iPhone (.ipa)',    'code'=>'393939', 'link'=>$r2.'Phim4K_v2.4.0_Iphone.ipa'],
            ['abbr'=>'4K','color'=>'teal',   'name'=>'Phim4K_v2.4.0_May_tinh_bang','ver'=>'v2.4.0','tag'=>'Miễn phí', 'sub'=>'Phim 4K phiên bản máy tính bảng',   'code'=>'393939', 'link'=>$r2.'Phim4K_v2.4.0_May_tinh_bang.apk'],
            ['abbr'=>'4K','color'=>'green',  'name'=>'Phim4K_v2.4.0_Mobile',     'ver'=>'v2.4.0', 'tag'=>'Miễn phí', 'sub'=>'Phim 4K phiên bản Mobile (.apk)',    'code'=>'393939', 'link'=>$r2.'Phim4K_v2.4.0_Mobile.apk'],
            ['abbr'=>'4K','color'=>'indigo', 'name'=>'Phim4K_v2.4.0_macOS',      'ver'=>'v2.4.0', 'tag'=>'Miễn phí', 'sub'=>'Phim 4K phiên bản macOS (.dmg)',     'code'=>'393939', 'link'=>$r2.'Phim4K_v2.4.0_macOS.dmg'],
        ],
    ],
    
    [
        'icon'  => '🎬',
        'title' => 'XEM PHIM',
        'apps'  => [
            ['abbr'=>'NV','color'=>'rose',   'name'=>'NVCPhim_v2.2.8',           'ver'=>'v2.2.8', 'tag'=>'Miễn phí', 'sub'=>'Ứng dụng xem phim NVC',          'code'=>'393939', 'link'=>$r2.'NVCPhim_v2.2.8.apk'],
            ['abbr'=>'NV','color'=>'teal',   'name'=>'NVC_Movie',                'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'NVC Movie – phim online',          'code'=>'393939', 'link'=>$r2.'NVC_Movie.apk'],
            ['abbr'=>'HI','color'=>'teal',   'name'=>'hieuga',                   'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'Ứng dụng xem phim hieuga',         'code'=>'393939', 'link'=>$r2.'hieuga.apk'],
            ['abbr'=>'VU','color'=>'indigo', 'name'=>'vuagiaitri',               'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'Vua Giải Trí – giải trí tổng hợp', 'code'=>'393939', 'link'=>$r2.'vuagiaitri.apk'],
            ['abbr'=>'CB','color'=>'rose',   'name'=>'cobephim-tv',              'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'Cobe Phim – xem phim trên TV',     'code'=>'6207062', 'link'=>$r2.'cobephim-tv.apk'],
            ['abbr'=>'RP','color'=>'orange', 'name'=>'rapphim-0.2.1-mobile',     'ver'=>'v0.2.1', 'tag'=>'Miễn phí', 'sub'=>'Rap Phim phiên bản mobile',        'code'=>'393939', 'link'=>$r2.'rapphim-0-2-1-mobile.apk'],
            ['abbr'=>'RP','color'=>'green',  'name'=>'rapphim-1.0.1-tv',         'ver'=>'v1.0.1', 'tag'=>'Miễn phí', 'sub'=>'Rap Phim phiên bản TV/Box',        'code'=>'6766306', 'link'=>$r2.'rapphim-1-0-1-tv.apk'],
            ['abbr'=>'SG','color'=>'teal',   'name'=>'saigonphim-tv',            'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'Sài Gòn Phim – xem phim trên TV', 'code'=>'7048453', 'link'=>$r2.'saigonphim-tv.apk'],
        ],
    ],
   
    [
        'icon'  => '📡',
        'title' => 'PHẦN MỀM IPTV',
        'apps'  => [
            
            ['abbr'=>'IP','color'=>'teal',   'name'=>'IPTV_PRO',                  'ver'=>'v1.0.0',    'tag'=>'PRO',      'sub'=>'IPTV Pro – xem truyền hình',               'code'=>'393939', 'link'=>$r2.'IPTV_PRO.apk'],
            ['abbr'=>'MM','color'=>'indigo', 'name'=>'M3u-IPTV-v3.0.11-Mod',      'ver'=>'v3.0.11',   'tag'=>'MOD',      'sub'=>'M3U IPTV player đã mod',                   'code'=>'393939', 'link'=>$r2.'M3u-IPTV-v3.0.11-Mod.apk'],
            ['abbr'=>'OT','color'=>'orange', 'name'=>'OTT_Navigator_v1.7.4.1_Mod','ver'=>'v1.7.4.1',  'tag'=>'MOD',      'sub'=>'OTT Navigator IPTV đã mod',                'code'=>'393939', 'link'=>$r2.'OTT_Navigator_v1.7.4.1_Mod.apk'],
            ['abbr'=>'SP','color'=>'rose',   'name'=>'SparkleTV',                 'ver'=>'v1.0.0',    'tag'=>'Miễn phí', 'sub'=>'SparkleTV – IPTV player',                  'code'=>'393939', 'link'=>$r2.'SparkleTV.apk'], 
            ['abbr'=>'TI','color'=>'teal',   'name'=>'TiviMate_v5.1.6_MOD',       'ver'=>'v5.1.6',    'tag'=>'MOD',      'sub'=>'TiviMate IPTV Player đã mod premium',      'code'=>'393939', 'link'=>$r2.'TiviMate_v5.1.6_MOD.apk'],
            ['abbr'=>'QU','color'=>'indigo', 'name'=>'quantv',                    'ver'=>'v1.0.0',    'tag'=>'Miễn phí', 'sub'=>'QuanTV – IPTV player',                     'code'=>'393939', 'link'=>$r2.'quantv.apk'],
            ['abbr'=>'TE','color'=>'gold',   'name'=>'televizo_v1.9.6.50_premium','ver'=>'v1.9.6.50', 'tag'=>'Premium',  'sub'=>'Televizo IPTV phiên bản premium',           'code'=>'393939', 'link'=>$r2.'televizo_v1.9.6.50_premium.apk'],
            ['abbr'=>'TI','color'=>'rose',   'name'=>'tivimate_2.1.5_premium',    'ver'=>'v2.1.5',    'tag'=>'Premium',  'sub'=>'TiviMate 2.1.5 phiên bản premium',         'code'=>'393939', 'link'=>$r2.'tivimate_2.1.5_premium.apk'],
			['abbr'=>'BA','color'=>'gold',   'name'=>'Backup_Host_5.1.6',         'ver'=>'v5.1.6',    'tag'=>'Miễn phí', 'sub'=>'Backup Host cho IPTV',                    'code'=>'393939', 'link'=>$r2.'Backup_Host_5.1.6.tmb'],
        ],
    ],
	[
        'icon'  => '▶️',
        'title' => 'YOUTUBE TV',
        'apps'  => [
            ['abbr'=>'TO','color'=>'rose',   'name'=>'ToTube',               'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'ToTube – xem YouTube trên TV',           'code'=>'393939', 'link'=>$r2.'ToTube.apk'],
            ['abbr'=>'YO','color'=>'orange', 'name'=>'Youtube_1.0.8',        'ver'=>'v1.0.8', 'tag'=>'Miễn phí', 'sub'=>'YouTube phiên bản TV',                   'code'=>'393939', 'link'=>$r2.'Youtube_1.0.8.apk'],
            ['abbr'=>'MA','color'=>'teal',   'name'=>'mapvoice',             'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'MapVoice – YouTube có giọng đọc',         'code'=>'393939', 'link'=>$r2.'mapvoice.apk'],
            ['abbr'=>'SA','color'=>'indigo', 'name'=>'supervoice-mod-ATV14', 'ver'=>'v14.0',  'tag'=>'MOD',      'sub'=>'SuperVoice Mod dành cho ATV14',            'code'=>'393939', 'link'=>$r2.'supervoice-mod-ATV14.apk'],
            ['abbr'=>'SU','color'=>'green',  'name'=>'supervoice_ATV9+',     'ver'=>'v9.0+',  'tag'=>'MOD',      'sub'=>'SuperVoice dành cho ATV9 trở lên',         'code'=>'393939', 'link'=>$r2.'supervoice_ATV9+.apk'],
            ['abbr'=>'S2','color'=>'gold',   'name'=>'supperVoice-2.2',      'ver'=>'v2.2',   'tag'=>'MOD',      'sub'=>'SupperVoice 2.2 – YouTube có giọng đọc',   'code'=>'393939', 'link'=>$r2.'supperVoice-2.2.apk'],
        ],
    ],
    [
        'icon'  => '🛠️',
        'title' => 'CÔNG CỤ & TOOLS',
        'apps'  => [
				            ['abbr'=>'HD','color'=>'indigo', 'name'=>'Movie Legend Store',                  'ver'=>'v3.1.5', 'tag'=>'Miễn phí', 'sub'=>'Movie Legend Store',         'code'=>'5564510', 'link'=>$r2.'Movie Legend Store.apk'],
		            ['abbr'=>'HD','color'=>'indigo', 'name'=>'HDPlay_Store_3.1.5',                  'ver'=>'v3.1.5', 'tag'=>'Miễn phí', 'sub'=>'HDPlay Store – kho app cho TV/Box',         'code'=>'393939', 'link'=>$r2.'HDPlay_Store_3.1.5.apk'],
		           ['abbr'=>'CC','color'=>'teal',   'name'=>'Coc_Coc_Lite_1.6',                    'ver'=>'v1.6',   'tag'=>'Miễn phí', 'sub'=>'Cốc Cốc Lite – trình duyệt TV',            'code'=>'393939', 'link'=>$r2.'Coc_Coc_Lite_1.6.apk'],
            ['abbr'=>'AU','color'=>'orange', 'name'=>'Autostart+v4.1.1_Modded_',            'ver'=>'v4.1.1', 'tag'=>'MOD',      'sub'=>'Autostart – khởi động app tự động',       'code'=>'393939', 'link'=>$r2.'Autostart%2Bv4.1.1_Modded_.apk'],
            ['abbr'=>'_A','color'=>'teal',   'name'=>'_ATV_app__TV_AppsDrawer',             'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'TV Apps Drawer – quản lý ứng dụng ATV',   'code'=>'393939', 'link'=>$r2.'_ATV_app__TV_AppsDrawer.apk'],
            ['abbr'=>'AM','color'=>'green',  'name'=>'atvTools_v1.3.0_42-mod',              'ver'=>'v1.3.0', 'tag'=>'MOD',      'sub'=>'ATV Tools – công cụ tiện ích cho box',     'code'=>'393939', 'link'=>$r2.'atvTools_v1.3.0_42-mod.apk'],
            ['abbr'=>'TV','color'=>'rose',   'name'=>'tvQuickActions_Pro_v3.6.0__Patched',  'ver'=>'v3.6.0', 'tag'=>'Patched',  'sub'=>'TV Quick Actions Pro – thao tác nhanh',    'code'=>'393939', 'link'=>$r2.'tvQuickActions_Pro_v3.6.0__Patched_.apk'],
            ['abbr'=>'PL','color'=>'gold',   'name'=>'Pro_Launcher_(PhapViet)',              'ver'=>'v1.0.0', 'tag'=>'Miễn phí', 'sub'=>'Pro Launcher PhápViệt – launcher TV/Box',  'code'=>'393939', 'link'=>$r2.'Pro_Launcher_(PhapViet).apk'],

        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?></title>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg: #f0f2f7;
    --bg-card: #ffffff;
    --bg-item: #f7f8fc;
    --border: #e4e7ef;
    --blue: #1a73e8;
    --blue-light: #e8f0fe;
    --purple: #7c3aed;
    --gold: #f59e0b;
    --text-primary: #1a1d2e;
    --text-secondary: #6b7280;
    --font: 'Be Vietnam Pro', 'Segoe UI', sans-serif;
    --radius-card: 18px;
    --radius-item: 12px;
    --shadow-card: 0 2px 16px rgba(0,0,0,0.07), 0 1px 4px rgba(0,0,0,0.04);
  }

  html { scroll-behavior: smooth; }
  body { background: var(--bg); font-family: var(--font); color: var(--text-primary); min-height: 100vh; }

  /* ── HERO ── */
  .hero {
    background: linear-gradient(135deg, #1a1d2e 0%, #1e3a8a 60%, #1a73e8 100%);
    padding: 36px 24px 28px; text-align: center; color: #fff;
  }
  .hero-title { font-size: clamp(22px, 5vw, 30px); font-weight: 900; letter-spacing: -0.3px; margin-bottom: 6px; }
  .hero-sub { font-size: 13px; opacity: 0.72; font-weight: 500; }

  /* ── TIPS BOX ── */
  .tips-box { margin: 18px 14px 0; background: var(--blue); border-radius: var(--radius-card); overflow: hidden; }
  .tips-header { display: flex; align-items: center; justify-content: space-between; padding: 13px 16px; cursor: pointer; color: #fff; }
  .tips-header-left { display: flex; align-items: center; gap: 8px; font-weight: 800; font-size: 12.5px; letter-spacing: 0.5px; text-transform: uppercase; }
  .tips-body { background: #fff; }
  .tips-body a { display: flex; align-items: center; gap: 10px; padding: 12px 16px; font-size: 13px; color: var(--text-primary); font-weight: 500; border-bottom: 1px solid var(--border); text-decoration: none; transition: background 0.15s; }
  .tips-body a:last-child { border-bottom: none; }
  .tips-body a:hover { background: var(--bg-item); }
  .tips-body a::before { content: '➜'; color: var(--blue); font-size: 12px; flex-shrink: 0; }

  /* ── CODE ROW ── */
  .code-row { display: flex; gap: 10px; margin: 12px 14px 0; }
  .code-row a { flex: 1; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 12px 10px; background: var(--bg-card); border-radius: var(--radius-card); font-size: 12.5px; font-weight: 700; color: var(--blue); text-decoration: none; border: 1px solid var(--border); box-shadow: var(--shadow-card); transition: background 0.15s; }
  .code-row a:hover { background: var(--blue-light); }

  /* ── SEARCH ── */
  .search-wrap { padding: 12px 14px 0; }
  .search-box { display: flex; align-items: center; gap: 10px; background: var(--bg-card); border: 1px solid var(--border); border-radius: 14px; padding: 10px 16px; box-shadow: var(--shadow-card); transition: border-color 0.2s; }
  .search-box:focus-within { border-color: rgba(26,115,232,0.5); box-shadow: 0 0 0 3px rgba(26,115,232,0.10); }
  .search-icon { font-size: 15px; opacity: 0.45; }
  .search-box input { background: none; border: none; outline: none; font-family: var(--font); font-size: 14px; color: var(--text-primary); width: 100%; }
  .search-box input::placeholder { color: var(--text-secondary); }

  /* ── CONTENT ── */
  .content { padding: 14px 14px 90px; }

  /* ── 2×2 GRID: always 2 columns ── */
  .cats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
  }

  /* On small phones, single column */
  @media (max-width: 500px) {
    .cats-grid { grid-template-columns: 1fr; }
  }

  /* PC wider layout */
  @media (min-width: 900px) {
    .hero { padding: 50px 40px 38px; }
    .tips-box, .code-row, .search-wrap { max-width: 860px; margin-left: auto; margin-right: auto; }
    .content { max-width: 1100px; margin: 0 auto; padding: 16px 24px 60px; }
    .cats-grid { gap: 20px; }
  }

  /* ── CATEGORY CARD ── */
  .cat-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: var(--radius-card); overflow: hidden; box-shadow: var(--shadow-card); }

  .cat-header { display: flex; align-items: center; gap: 8px; padding: 14px 14px 11px; border-bottom: 1px solid rgba(26,115,232,0.2); background: linear-gradient(135deg, #1a73e8 0%, #1e3a8a 100%); }
  .cat-title { color: #fff !important; }
  .cat-emoji { filter: drop-shadow(0 1px 2px rgba(0,0,0,0.3)); }
  .cat-emoji { font-size: 18px; flex-shrink: 0; }
  .cat-title { font-size: 12px; font-weight: 800; letter-spacing: 0.7px; text-transform: uppercase; color: var(--text-primary); flex: 1; line-height: 1.3; }
  .cat-count { font-size: 10.5px; font-weight: 700; color: #1a73e8; background: rgba(255,255,255,0.9); border-radius: 20px; padding: 2px 9px; white-space: nowrap; flex-shrink: 0; }

  .cat-items { padding: 9px 9px 9px; display: flex; flex-direction: column; gap: 6px; }

  /* ── APP ITEM ── */
  .app-item { display: flex; align-items: center; gap: 9px; background: var(--bg-item); border: 1px solid var(--border); border-radius: var(--radius-item); padding: 9px 10px; transition: box-shadow 0.18s, border-color 0.18s; }
  .app-item:hover { border-color: rgba(26,115,232,0.35); box-shadow: 0 3px 12px rgba(26,115,232,0.10); }

  .app-avatar { width: 36px; height: 36px; min-width: 36px; border-radius: 9px; background: linear-gradient(135deg, var(--blue), var(--purple)); display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 800; color: #fff; letter-spacing: 0.2px; flex-shrink: 0; }
  .app-avatar.gold   { background: linear-gradient(135deg, #f59e0b, #d97706); }
  .app-avatar.teal   { background: linear-gradient(135deg, #0d9488, #0891b2); }
  .app-avatar.rose   { background: linear-gradient(135deg, #e11d48, #be123c); }
  .app-avatar.indigo { background: linear-gradient(135deg, #4f46e5, #7c3aed); }
  .app-avatar.green  { background: linear-gradient(135deg, #16a34a, #15803d); }
  .app-avatar.orange { background: linear-gradient(135deg, #ea580c, #c2410c); }

  .app-info { flex: 1; min-width: 0; }
  .app-name { font-size: 12px; font-weight: 600; color: var(--text-primary); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
  .app-meta { font-size: 10px; color: var(--text-secondary); margin-top: 2px; font-weight: 500; }

  .app-actions { display: flex; gap: 5px; align-items: center; flex-shrink: 0; }

  .btn-code { background: #374151; color: #fff; border: none; border-radius: 18px; padding: 6px 12px; font-size: 11px; font-weight: 700; font-family: var(--font); cursor: pointer; transition: background 0.18s; white-space: nowrap; }
  .btn-code:hover { background: #1f2937; }
  .code-badge { display:none; background: #f3f4f6; color: #1a1d2e; border: 1.5px solid #d1d5db; border-radius: 18px; padding: 5px 13px; font-size: 12px; font-weight: 700; font-family: var(--font); cursor: pointer; white-space: nowrap; letter-spacing: 0.3px; transition: background 0.15s; }
  .code-badge:hover { background: #e5e7eb; }
  .code-badge.visible { display: inline-flex; align-items: center; }

  .btn-icon { width: 30px; height: 30px; background: var(--blue-light); border: 1.5px solid rgba(26,115,232,0.25); border-radius: 9px; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 14px; color: var(--blue); text-decoration: none; transition: background 0.18s; flex-shrink: 0; }
  .btn-icon:hover { background: #c7d9fb; }

  .btn-dl {
    display: inline-flex; align-items: center; gap: 5px;
    background: linear-gradient(135deg, #16a34a, #15803d);
    color: #fff; border: none; border-radius: 10px;
    padding: 6px 11px; font-size: 11px; font-weight: 700;
    font-family: var(--font); cursor: pointer; text-decoration: none;
    flex-shrink: 0; transition: opacity 0.18s; white-space: nowrap;
    box-shadow: 0 2px 6px rgba(21,128,61,0.25);
  }
  .btn-dl:hover { opacity: 0.85; }
  .btn-dl svg { width: 13px; height: 13px; flex-shrink: 0; }

  /* ── COPY MODAL ── */
  .copy-modal { display:none; position:fixed; inset:0; background:rgba(0,0,0,0.45); z-index:200; align-items:center; justify-content:center; }
  .copy-modal.open { display:flex; }
  .copy-box { background:#fff; border-radius:16px; padding:24px 20px 18px; width:min(92vw,420px); box-shadow:0 8px 32px rgba(0,0,0,0.18); }
  .copy-title { font-size:14px; font-weight:800; color:var(--text-primary); margin-bottom:14px; display:flex; align-items:center; gap:7px; }
  .copy-input { width:100%; border:1.5px solid var(--border); border-radius:10px; padding:9px 12px; font-size:12px; font-family:var(--font); color:var(--text-primary); outline:none; background:var(--bg-item); }
  .copy-input:focus { border-color:rgba(26,115,232,0.5); }
  .copy-actions { display:flex; gap:8px; margin-top:14px; justify-content:flex-end; }
  .copy-btn-close { background:var(--bg-item); border:1.5px solid var(--border); color:var(--text-secondary); border-radius:10px; padding:8px 18px; font-size:12px; font-weight:700; font-family:var(--font); cursor:pointer; }
  .copy-btn-copy { background:var(--blue); color:#fff; border:none; border-radius:10px; padding:8px 18px; font-size:12px; font-weight:700; font-family:var(--font); cursor:pointer; transition:background 0.15s; }
  .copy-btn-copy:hover { background:#1558c0; }

  /* ── BOTTOM NAV ── */
  .bottom-nav { position: fixed; bottom: 0; left: 0; right: 0; background: rgba(255,255,255,0.97); backdrop-filter: blur(12px); border-top: 1px solid var(--border); display: flex; justify-content: space-around; align-items: center; padding: 8px 0 14px; z-index: 100; }
  @media (min-width: 900px) { .bottom-nav { display: none; } }
  .nav-item { display: flex; flex-direction: column; align-items: center; gap: 3px; font-size: 9px; font-weight: 700; letter-spacing: 0.4px; color: var(--text-secondary); cursor: pointer; padding: 4px 10px; border-radius: 12px; transition: color 0.2s; }
  .nav-item.active { color: var(--blue); }
  .nav-icon { font-size: 19px; }
</style>
</head>
<body>

<header class="hero">
  <h1 class="hero-title"><?= htmlspecialchars($page_title) ?></h1>
  <p class="hero-sub"><?= htmlspecialchars($page_sub) ?></p>
</header>

<div class="code-row">

<a target="_blank" href="https://go.aftvnews.com/">🌐 Web tạo CODE cài APP</a>
  <a href="https://tinhlagi.pro/app/huongdan_code.php">📋 Hướng dẫn lấy CODE để cài APP</a>
    <a href="https://tinhlagi.pro/app/huongdan_sendtofile.php">📋 Hướng dẫn Send to File</a>

</div>
<div class="search-wrap">
  <div class="search-box">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Tìm kiếm ứng dụng..." oninput="filterApps(this.value)">
  </div>
</div>

<main class="content">
<div class="cats-grid" id="appList">

<?php foreach ($categories as $cat): ?>
  <?php $count = count($cat['apps']); ?>
  <div class="cat-card" data-cat="<?= htmlspecialchars($cat['title']) ?>">
    <div class="cat-header">
      <span class="cat-emoji"><?= $cat['icon'] ?></span>
      <span class="cat-title"><?= htmlspecialchars($cat['title']) ?></span>
      <span class="cat-count"><?= $count ?> app</span>
    </div>
    <div class="cat-items">
      <?php foreach ($cat['apps'] as $app): ?>
      <div class="app-item">
        <div class="app-avatar <?= htmlspecialchars($app['color']) ?>"><?= htmlspecialchars($app['abbr']) ?></div>
        <div class="app-info">
          <div class="app-name"><?= htmlspecialchars($app['name']) ?></div>
          <div class="app-meta"><?= htmlspecialchars($app['ver']) ?> • <?= htmlspecialchars($app['tag']) ?></div>
        </div>
        <div class="app-actions">
          <?php if (!empty($app['code'])): ?>
            <button class="btn-code" onclick="toggleCode(this)">CODE</button>
            <span class="code-badge" onclick="copyCode(this)" title="Bấm để copy"><?= htmlspecialchars($app['code']) ?></span>
          <?php else: ?>
            <button class="btn-code" disabled style="opacity:0.4;cursor:default">CODE</button>
          <?php endif; ?>
          <button class="btn-icon" title="Copy link" onclick="copyLink('<?= htmlspecialchars($app['name']) ?>','<?= htmlspecialchars($app['link']) ?>')">🔗</button>
          <a class="btn-dl" href="<?= htmlspecialchars($app['link']) ?>" download title="Tải xuống">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v13M7 11l5 5 5-5"/><path d="M4 20h16"/></svg>
            Tải
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>

</div>
</main>

<nav class="bottom-nav">
  <div class="nav-item active"><span class="nav-icon">🏠</span><span>Trang chủ</span></div>
  <div class="nav-item"><span class="nav-icon">📦</span><span>Kho app</span></div>
  <div class="nav-item"><span class="nav-icon">⬇</span><span>Đã tải</span></div>
  <div class="nav-item"><span class="nav-icon">⚙</span><span>Cài đặt</span></div>
</nav>

<!-- Copy Link Modal -->
<div class="copy-modal" id="copyModal">
  <div class="copy-box">
    <div class="copy-title">🔗 Link tải: <span id="modalAppName"></span></div>
    <input class="copy-input" id="modalLink" type="text" readonly onclick="this.select()">
    <div class="copy-actions">
      <button class="copy-btn-close" onclick="closeModal()">Đóng</button>
      <button class="copy-btn-copy" onclick="doCopy()">Copy Link</button>
    </div>
  </div>
</div>

<script>
  function toggleCode(btn) {
    const badge = btn.nextElementSibling;
    badge.classList.toggle('visible');
  }
  function copyCode(badge) {
    const code = badge.textContent.trim();
    navigator.clipboard.writeText(code).catch(() => {});
    const orig = badge.textContent;
    badge.textContent = '✅ Đã copy!';
    setTimeout(() => badge.textContent = orig, 1500);
  }
  function copyLink(name, link) {
    document.getElementById('modalAppName').textContent = name;
    document.getElementById('modalLink').value = link;
    document.getElementById('copyModal').classList.add('open');
    setTimeout(() => { document.getElementById('modalLink').select(); docopy(link); }, 50);
  }
  function doCopy() {
    const input = document.getElementById('modalLink');
    input.select();
    navigator.clipboard.writeText(input.value).catch(() => document.execCommand('copy'));
    const btn = document.querySelector('.copy-btn-copy');
    btn.textContent = '✅ Đã copy!';
    setTimeout(() => btn.textContent = 'Copy Link', 1500);
  }
  function doopy(link) {
    navigator.clipboard.writeText(link).catch(() => {});
  }
  function closeModal() {
    document.getElementById('copyModal').classList.remove('open');
    document.querySelector('.copy-btn-copy').textContent = 'Copy Link';
  }
  document.getElementById('copyModal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
  });

  function filterApps(q) {
    const query = q.toLowerCase().trim();
    document.querySelectorAll('.app-item').forEach(item => {
      const name = item.querySelector('.app-name').textContent.toLowerCase();
      item.style.display = (query === '' || name.includes(query)) ? '' : 'none';
    });
    document.querySelectorAll('.cat-card').forEach(card => {
      const visible = [...card.querySelectorAll('.app-item')].some(i => i.style.display !== 'none');
      card.style.display = visible ? '' : 'none';
    });
  }
</script>
</body>
</html>