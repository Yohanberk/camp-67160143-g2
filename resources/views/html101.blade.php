<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ฟอร์มสมัคร</title>
  <style>
    :root{
      --bg:#f4f7fb;
      --card:#ffffff;
      --accent:#5b7cfa;
      --muted:#6b7280;
      --radius:12px;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;min-height:100vh;background:linear-gradient(180deg,var(--bg),#eef3ff 60%);display:flex;align-items:center;justify-content:center;padding:32px}
    .card{width:100%;max-width:920px;background:var(--card);border-radius:var(--radius);box-shadow:0 8px 30px rgba(45,55,72,0.12);overflow:hidden;display:grid;grid-template-columns:1fr 420px}
    .left{padding:28px 36px}
    h1{margin:0 0 6px 0;font-size:20px}
    p.lead{margin:0 0 18px;color:var(--muted);font-size:14px}
    form{display:grid;gap:12px}
    .row{display:flex;gap:12px}
    .row .field{flex:1}
    label{display:block;font-size:12px;color:var(--muted);margin-bottom:6px}
    input[type=text], input[type=date], textarea, select, input[type=color]{width:100%;padding:10px 12px;border:1px solid #e6e9f2;border-radius:8px;font-size:14px}
    textarea{min-height:86px;resize:vertical}
    .gender{display:flex;gap:12px;align-items:center}
    .gender input{margin-right:8px}
    .genres{display:flex;flex-wrap:wrap;gap:8px}
    .genres label{background:#f1f5ff;border:1px solid #e6edff;padding:8px 10px;border-radius:999px;font-size:13px;cursor:pointer}
    .actions{display:flex;gap:10px;margin-top:8px}
    button{padding:10px 14px;border-radius:10px;border:0;font-weight:600;cursor:pointer}
    button.save{background:var(--accent);color:white}
    button.reset{background:transparent;border:1px solid #d6d9f3;color:var(--muted)}
    .right{background:linear-gradient(180deg,#fbfdff,#f7f9ff);padding:18px;border-left:1px dashed #eef2ff}
    .preview{border-radius:10px;border:1px dashed #e6ebff;background:linear-gradient(180deg,#fff,#fbfdff);padding:12px;display:flex;flex-direction:column;gap:12px;align-items:center}
    .preview img{width:100%;height:220px;object-fit:cover;border-radius:8px}
    .meta{width:100%;display:flex;flex-direction:column;gap:8px}
    .meta .item{display:flex;justify-content:space-between;font-size:13px;color:var(--muted)}
    .small{font-size:12px;color:var(--muted)}
    @media (max-width:880px){.card{grid-template-columns:1fr;}.right{order:-1}}
  </style>
</head>
<body>
  <div class="card">
    <div class="left">
      <h1>ฟอร์มสมัครสมาชิก</h1>
      <p class="lead">กรอกข้อมูลด้านล่างเพื่อลงทะเบียน — ฟิลด์ที่มีเครื่องหมาย * เป็นฟิลด์ที่ต้องกรอก</p>

      <form id="signup" enctype="multipart/form-data" onsubmit="handleSubmit(event)">
        <div class="row">
          <div class="field">
            <label for="fname">ชื่อ *</label>
            <input id="fname" name="firstName" type="text" placeholder="เช่น สมชาย" required />
          </div>
          <div class="field">
            <label for="lname">นามสกุล *</label>
            <input id="lname" name="lastName" type="text" placeholder="เช่น ใจดี" required />
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label for="dob">วันเดือนปีเกิด *</label>
            <input id="dob" name="dob" type="date" required />
          </div>
          <div class="field">
            <label>เพศ *</label>
            <div class="gender">
              <label><input type="radio" name="gender" value="male" required> ชาย</label>
              <label><input type="radio" name="gender" value="female"> หญิง</label>
              <label><input type="radio" name="gender" value="other"> อื่นๆ</label>
            </div>
          </div>
        </div>

        <div>
          <label for="photo">รูปประจำตัว</label>
          <input id="photo" name="photo" type="file" accept="image/*" onchange="previewImage(event)" />
        </div>

        <div>
          <label for="address">ที่อยู่</label>
          <textarea id="address" name="address" placeholder="ที่อยู่ บ้าน หมู่เลข ตำบล..." ></textarea>
        </div>

        <div class="row">
          <div class="field">
            <label for="color">สีที่ชอบ</label>
            <input id="color" name="favoriteColor" type="color" value="#5b7cfa" />
          </div>
          <div class="field">
            <label for="genres">แนวเพลงที่ชอบ</label>
            <select id="genres" name="genres" multiple size="3">
              <option value="pop">ป็อป</option>
              <option value="rock">ร็อก</option>
              <option value="jazz">แจ๊ส</option>
              <option value="hiphop">ฮิปฮอป</option>
              <option value="classical">คลาสสิก</option>
              <option value="electronic">อิเล็กทรอนิกส์</option>
            </select>
            <div class="small">กด Ctrl (หรือ Cmd) เพื่อเลือกหลายข้อ</div>
          </div>
        </div>

        <div style="display:flex;align-items:center;gap:10px;margin-top:6px">
          <input id="agree" name="agree" type="checkbox" required />
          <label for="agree">ยินยอมให้ใช้ข้อมูลตามนโยบาย (ต้องติ๊ก)</label>
        </div>

        <div class="actions">
          <button type="reset" class="reset">รีเซ็ต</button>
          <button type="submit" class="save">บันทึก</button>
        </div>
      </form>

      <p class="small" style="margin-top:12px">หมายเหตุ: ฟอร์มนี้เป็นตัวอย่าง — ถ้าจะนำไปใช้จริง ต้องเพิ่มการตรวจสอบฝั่งเซิร์ฟเวอร์</p>
    </div>

    <div class="right">
      <div class="preview">
        <div style="width:100%">
          <strong>ตัวอย่างรูป</strong>
        </div>
        <img id="imgPreview" src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='640' height='360'><rect width='100%' height='100%' fill='%23eef2ff'/><text x='50%' y='50%' dominant-baseline='middle' text-anchor='middle' font-size='22' fill='%23707b96'>ยังไม่ได้อัปโหลดรูป</text></svg>" alt="preview" />

        <div class="meta">
          <div class="item"><span>ชื่อ-นามสกุล</span><span id="metaName">—</span></div>
          <div class="item"><span>วันเกิด</span><span id="metaDob">—</span></div>
          <div class="item"><span>เพศ</span><span id="metaGender">—</span></div>
          <div class="item"><span>สีที่ชอบ</span><span id="metaColor">—</span></div>
          <div class="item"><span>แนวเพลง</span><span id="metaGenres">—</span></div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const form = document.getElementById('signup');
    const img = document.getElementById('imgPreview');
    const metaName = document.getElementById('metaName');
    const metaDob = document.getElementById('metaDob');
    const metaGender = document.getElementById('metaGender');
    const metaColor = document.getElementById('metaColor');
    const metaGenres = document.getElementById('metaGenres');

    function previewImage(e){
      const file = e.target.files && e.target.files[0];
      if(!file) return;
      const reader = new FileReader();
      reader.onload = ()=> img.src = reader.result;
      reader.readAsDataURL(file);
    }

    form.addEventListener('input', ()=>{
      const fn = form.firstName.value.trim();
      const ln = form.lastName.value.trim();
      metaName.textContent = fn || ln ? (fn + ' ' + ln).trim() : '—';
      metaDob.textContent = form.dob.value || '—';
      const g = form.gender.value || '—';
      metaGender.textContent = g === 'male' ? 'ชาย' : g === 'female' ? 'หญิง' : (g === 'other' ? 'อื่นๆ' : '—');
      metaColor.textContent = form.favoriteColor.value || '—';
      const selected = Array.from(form.genres.selectedOptions).map(o=>o.text).join(', ');
      metaGenres.textContent = selected || '—';
    });

    function handleSubmit(e){
      e.preventDefault();
      // ตัวอย่างการแสดงข้อมูลก่อนส่งจริง
      const data = new FormData(form);
      alert('ข้อมูลถูกบันทึก (ตัวอย่าง)\nชื่อ: '+data.get('firstName')+' '+data.get('lastName'));
    }
  </script>
</body>
>>>>>>> f49cb5a3471bb923b8953b482f8ba7700f43964e
</html>
