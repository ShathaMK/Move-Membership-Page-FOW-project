<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <title>MOVE – Calorie Calculator</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ─── NAV ─── */
        header {
            background-color: #fff;
            width: 100%;
            position: fixed;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 100px;
            font-family: 'Julius Sans One', sans-serif;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .logo { text-decoration: none; color: black; }
        .logo span { display: flex; font-size: 40px; color: #33CCCC; }
        .navigation a {
            text-decoration: none;
            color: black;
            font-size: 1em;
            font-weight: 500;
            padding-left: 30px;
            transition: color 0.2s;
        }
        .navigation a:hover, .navigation a.active { color: #33CCCC; }

        /* ─── HERO ─── */
        .page-hero {
            margin-top: 80px;
            background: linear-gradient(135deg, #0a2a2a, #0d4444);
            padding: 60px 40px;
            text-align: center;
        }
        .page-hero h1 {
            font-family: 'Julius Sans One', serif;
            font-size: 48px;
            color: #33CCCC;
            letter-spacing: 3px;
        }
        .page-hero p {
            color: #aaa;
            font-size: 16px;
            margin-top: 12px;
        }

        /* ─── MAIN ─── */
        .main-content {
            flex: 1;
            max-width: 860px;
            width: 100%;
            margin: 48px auto;
            padding: 0 20px 60px;
        }

        /* ─── CARD ─── */
        .calc-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(135deg, #00ADB5, #9ddfe2);
            padding: 24px 32px;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .card-header i { font-size: 28px; color: #fff; }
        .card-header h2 { color: #fff; font-size: 22px; font-weight: 600; }
        .card-header p  { color: rgba(255,255,255,0.85); font-size: 13px; margin-top: 2px; }

        .card-body { padding: 32px; }

        /* ─── GENDER TOGGLE ─── */
        .gender-toggle {
            display: flex;
            background: #f0f0f0;
            border-radius: 10px;
            padding: 4px;
            margin-bottom: 28px;
            max-width: 300px;
        }
        .gender-toggle button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: transparent;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            color: #888;
            cursor: pointer;
            transition: all 0.25s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }
        .gender-toggle button.active {
            background: #fff;
            color: #00ADB5;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        /* ─── INPUT GRID ─── */
        .input-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 24px;
        }
        .field-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
        }
        .field-group label span {
            color: #00ADB5;
            font-weight: 400;
            font-size: 12px;
            margin-left: 4px;
        }
        .input-with-unit {
            display: flex;
            align-items: center;
            border: 1.5px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: border-color 0.2s;
        }
        .input-with-unit:focus-within { border-color: #00ADB5; }
        .input-with-unit input {
            flex: 1;
            border: none;
            outline: none;
            padding: 12px 14px;
            font-size: 16px;
            font-family: 'Montserrat', sans-serif;
            color: #222;
        }
        .input-with-unit .unit {
            padding: 12px 14px;
            background: #f8f8f8;
            font-size: 13px;
            color: #888;
            font-weight: 500;
            border-left: 1px solid #eee;
        }

        /* ─── AGE ─── */
        .age-row { margin-bottom: 24px; }

        /* ─── ACTIVITY ─── */
        .activity-section { margin-bottom: 28px; }
        .activity-section label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 10px;
        }
        .activity-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .activity-btn {
            padding: 12px 8px;
            border: 1.5px solid #ddd;
            border-radius: 8px;
            background: #fff;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 500;
            color: #555;
            text-align: center;
            transition: all 0.2s;
            line-height: 1.4;
        }
        .activity-btn span { display: block; font-size: 18px; margin-bottom: 4px; }
        .activity-btn:hover { border-color: #00ADB5; color: #00ADB5; background: #f0fafa; }
        .activity-btn.active { border-color: #00ADB5; background: #e6f9fa; color: #00ADB5; }

        /* ─── GOAL ─── */
        .goal-section { margin-bottom: 28px; }
        .goal-section label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #444;
            margin-bottom: 10px;
        }
        .goal-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
        .goal-btn {
            padding: 12px 8px;
            border: 1.5px solid #ddd;
            border-radius: 8px;
            background: #fff;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 500;
            color: #555;
            text-align: center;
            transition: all 0.2s;
        }
        .goal-btn span { display: block; font-size: 16px; margin-bottom: 4px; }
        .goal-btn:hover { border-color: #00ADB5; color: #00ADB5; background: #f0fafa; }
        .goal-btn.active { border-color: #00ADB5; background: #e6f9fa; color: #00ADB5; }

        /* ─── CALCULATE BTN ─── */
        .calc-btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #00ADB5, #9ddfe2);
            color: #fff;
            font-family: 'Julius Sans One', serif;
            font-size: 18px;
            letter-spacing: 2px;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.2s;
        }
        .calc-btn:hover { opacity: 0.9; transform: translateY(-1px); }
        .calc-btn:active { transform: scale(0.99); }

        /* ─── RESULTS ─── */
        .results {
            margin-top: 32px;
            display: none;
            animation: fadeUp 0.4s ease;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .results-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .results-header h3 { font-size: 18px; color: #222; }
        .results-header i { color: #00ADB5; }

        .bmi-bar-wrap { margin-bottom: 28px; }
        .bmi-label-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 6px;
        }
        .bmi-label-row .bmi-val {
            font-size: 28px;
            font-weight: 700;
            color: #222;
        }
        .bmi-label-row .bmi-cat {
            font-size: 14px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
        }
        .bmi-bar {
            height: 10px;
            border-radius: 6px;
            background: linear-gradient(to right, #4fc3f7 0%, #66bb6a 25%, #ffa726 60%, #ef5350 100%);
            position: relative;
            margin-bottom: 6px;
        }
        .bmi-pointer {
            width: 16px;
            height: 16px;
            background: #222;
            border: 3px solid #fff;
            border-radius: 50%;
            position: absolute;
            top: -3px;
            transform: translateX(-50%);
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            transition: left 0.6s ease;
        }
        .bmi-scale-labels {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            color: #aaa;
        }

        .calories-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-bottom: 24px;
        }
        .cal-card {
            border-radius: 12px;
            padding: 20px 16px;
            text-align: center;
            border: 1.5px solid #eee;
        }
        .cal-card.main {
            background: linear-gradient(135deg, #00ADB5, #9ddfe2);
            border-color: transparent;
            grid-column: 1 / -1;
        }
        .cal-card .cal-label {
            font-size: 12px;
            font-weight: 600;
            color: #999;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .cal-card.main .cal-label { color: rgba(255,255,255,0.85); }
        .cal-card .cal-val {
            font-size: 36px;
            font-weight: 700;
            color: #222;
        }
        .cal-card.main .cal-val { font-size: 52px; color: #fff; }
        .cal-card .cal-unit {
            font-size: 13px;
            color: #aaa;
            margin-top: 2px;
        }
        .cal-card.main .cal-unit { color: rgba(255,255,255,0.75); }
        .cal-card .cal-desc {
            font-size: 11px;
            color: #bbb;
            margin-top: 6px;
        }

        .macro-section { margin-top: 4px; }
        .macro-section h4 { font-size: 14px; font-weight: 600; color: #444; margin-bottom: 12px; }
        .macro-bars { display: flex; flex-direction: column; gap: 10px; }
        .macro-row { display: flex; align-items: center; gap: 12px; }
        .macro-name { font-size: 13px; font-weight: 500; width: 90px; color: #555; }
        .macro-track { flex: 1; height: 8px; background: #f0f0f0; border-radius: 4px; overflow: hidden; }
        .macro-fill { height: 100%; border-radius: 4px; transition: width 0.8s ease; }
        .macro-grams { font-size: 13px; font-weight: 600; color: #333; width: 60px; text-align: right; }

        .tip-box {
            margin-top: 24px;
            background: #f0fafa;
            border-left: 4px solid #00ADB5;
            border-radius: 0 8px 8px 0;
            padding: 14px 18px;
            font-size: 13px;
            color: #444;
            line-height: 1.6;
        }
        .tip-box strong { color: #00ADB5; }

        /* ─── FOOTER ─── */
        .footer {
            color: white;
            background-color: #7E7E7E;
            padding: 2em;
            display: flex;
            font-family: 'Montserrat', monospace;
            align-items: center;
            width: 100%;
            justify-content: space-between;
        }
        .footer .social-icons a { color: #fff; font-size: 1.3em; padding: 0 12px 0 0; }
        .footer p { color: white; font-size: small; margin-right: 30px; }
        .footer .location { text-decoration: none; color: white; font-size: small; margin-left: 30px; }

        @media (max-width: 600px) {
            header { padding: 10px 20px; }
            .input-grid { grid-template-columns: 1fr; }
            .activity-grid { grid-template-columns: repeat(2, 1fr); }
            .goal-grid { grid-template-columns: repeat(2, 1fr); }
            .calories-grid { grid-template-columns: 1fr; }
            .cal-card.main { grid-column: 1; }
        }
    </style>
</head>
<body>

<header>
    <a class="logo" href="home.php">
        <span>M<video id="myVideo" width="40px" height="40px" muted loop><source src="cube-in-circle.mp4"></video>VE</span>
    </a>
    <nav class="navigation">
        <a href="home.php">Home</a>
        <a href="Membership.php">Membership</a>
        <a href="calories.php" class="active">Calorie Calculator</a>
        <a href="contact.php">Contact Us</a>
    </nav>
</header>

<div class="page-hero">
    <h1>Calorie Calculator</h1>
    <p>Find your daily calorie needs based on your body & goals</p>
</div>

<div class="main-content">
    <div class="calc-card">
        <div class="card-header">
            <i class="fa-solid fa-fire-flame-curved"></i>
            <div>
                <h2>Daily Calorie Needs</h2>
                <p>Using the Mifflin-St Jeor equation</p>
            </div>
        </div>
        <div class="card-body">

            <!-- GENDER -->
            <div class="gender-toggle">
                <button class="active" id="btn-male" onclick="setGender('male')">
                    <i class="fa-solid fa-mars"></i> Male
                </button>
                <button id="btn-female" onclick="setGender('female')">
                    <i class="fa-solid fa-venus"></i> Female
                </button>
            </div>

            <!-- HEIGHT & WEIGHT -->
            <div class="input-grid">
                <div class="field-group">
                    <label>Height <span>(cm)</span></label>
                    <div class="input-with-unit">
                        <input type="number" id="height" placeholder="175" min="100" max="250">
                        <span class="unit">cm</span>
                    </div>
                </div>
                <div class="field-group">
                    <label>Weight <span>(kg)</span></label>
                    <div class="input-with-unit">
                        <input type="number" id="weight" placeholder="70" min="30" max="300">
                        <span class="unit">kg</span>
                    </div>
                </div>
            </div>

            <!-- AGE -->
            <div class="age-row">
                <div class="field-group">
                    <label>Age <span>(years)</span></label>
                    <div class="input-with-unit" style="max-width: 200px;">
                        <input type="number" id="age" placeholder="25" min="10" max="100">
                        <span class="unit">yrs</span>
                    </div>
                </div>
            </div>

            <!-- ACTIVITY -->
            <div class="activity-section">
                <label>Activity Level</label>
                <div class="activity-grid">
                    <button class="activity-btn active" data-val="1.2" onclick="setActivity(this)">
                        <span>🛋️</span>Sedentary<br><small style="color:#aaa;font-size:10px">Little/no exercise</small>
                    </button>
                    <button class="activity-btn" data-val="1.375" onclick="setActivity(this)">
                        <span>🚶</span>Light<br><small style="color:#aaa;font-size:10px">1–3 days/week</small>
                    </button>
                    <button class="activity-btn" data-val="1.55" onclick="setActivity(this)">
                        <span>🏃</span>Moderate<br><small style="color:#aaa;font-size:10px">3–5 days/week</small>
                    </button>
                    <button class="activity-btn" data-val="1.725" onclick="setActivity(this)">
                        <span>🏋️</span>Active<br><small style="color:#aaa;font-size:10px">6–7 days/week</small>
                    </button>
                    <button class="activity-btn" data-val="1.9" onclick="setActivity(this)">
                        <span>🔥</span>Very Active<br><small style="color:#aaa;font-size:10px">Hard daily exercise</small>
                    </button>
                    <button class="activity-btn" data-val="2.0" onclick="setActivity(this)">
                        <span>⚡</span>Athlete<br><small style="color:#aaa;font-size:10px">2x training/day</small>
                    </button>
                </div>
            </div>

            <!-- GOAL -->
            <div class="goal-section">
                <label>Your Goal</label>
                <div class="goal-grid">
                    <button class="goal-btn" data-adj="-500" onclick="setGoal(this)">
                        <span>📉</span>Lose Weight<br><small style="color:#aaa;font-size:10px">−500 kcal/day</small>
                    </button>
                    <button class="goal-btn active" data-adj="0" onclick="setGoal(this)">
                        <span>⚖️</span>Maintain<br><small style="color:#aaa;font-size:10px">Current weight</small>
                    </button>
                    <button class="goal-btn" data-adj="500" onclick="setGoal(this)">
                        <span>📈</span>Gain Muscle<br><small style="color:#aaa;font-size:10px">+500 kcal/day</small>
                    </button>
                </div>
            </div>

            <button class="calc-btn" onclick="calculate()">
                <i class="fa-solid fa-calculator"></i>&nbsp; CALCULATE
            </button>

            <!-- RESULTS -->
            <div class="results" id="results">
                <div class="results-header">
                    <i class="fa-solid fa-chart-simple"></i>
                    <h3>Your Results</h3>
                </div>

                <!-- BMI -->
                <div class="bmi-bar-wrap">
                    <div class="bmi-label-row">
                        <div>
                            <div style="font-size:13px;color:#888;font-weight:600;margin-bottom:2px">BMI</div>
                            <div class="bmi-val" id="bmi-val">—</div>
                        </div>
                        <div class="bmi-cat" id="bmi-cat"></div>
                    </div>
                    <div class="bmi-bar">
                        <div class="bmi-pointer" id="bmi-pointer" style="left:0%"></div>
                    </div>
                    <div class="bmi-scale-labels">
                        <span>Underweight<br>&lt;18.5</span>
                        <span>Normal<br>18.5–24.9</span>
                        <span>Overweight<br>25–29.9</span>
                        <span>Obese<br>≥30</span>
                    </div>
                </div>

                <!-- CALORIE CARDS -->
                <div class="calories-grid">
                    <div class="cal-card main">
                        <div class="cal-label">DAILY CALORIE TARGET</div>
                        <div class="cal-val" id="tdee-goal">—</div>
                        <div class="cal-unit">kcal / day</div>
                    </div>
                    <div class="cal-card">
                        <div class="cal-label">BMR</div>
                        <div class="cal-val" id="bmr-val" style="font-size:24px">—</div>
                        <div class="cal-unit">kcal</div>
                        <div class="cal-desc">at rest</div>
                    </div>
                    <div class="cal-card">
                        <div class="cal-label">TDEE</div>
                        <div class="cal-val" id="tdee-val" style="font-size:24px">—</div>
                        <div class="cal-unit">kcal</div>
                        <div class="cal-desc">maintenance</div>
                    </div>
                    <div class="cal-card">
                        <div class="cal-label">GOAL ADJ.</div>
                        <div class="cal-val" id="goal-adj" style="font-size:24px">—</div>
                        <div class="cal-unit">kcal</div>
                        <div class="cal-desc" id="goal-adj-desc">—</div>
                    </div>
                </div>

                <!-- MACROS -->
                <div class="macro-section">
                    <h4><i class="fa-solid fa-bowl-food" style="color:#00ADB5;margin-right:8px"></i>Recommended Macros</h4>
                    <div class="macro-bars">
                        <div class="macro-row">
                            <span class="macro-name">🍞 Carbs</span>
                            <div class="macro-track"><div class="macro-fill" id="carb-bar" style="width:0%;background:#4fc3f7"></div></div>
                            <span class="macro-grams" id="carb-g">—</span>
                        </div>
                        <div class="macro-row">
                            <span class="macro-name">🥩 Protein</span>
                            <div class="macro-track"><div class="macro-fill" id="prot-bar" style="width:0%;background:#66bb6a"></div></div>
                            <span class="macro-grams" id="prot-g">—</span>
                        </div>
                        <div class="macro-row">
                            <span class="macro-name">🥑 Fat</span>
                            <div class="macro-track"><div class="macro-fill" id="fat-bar" style="width:0%;background:#ffa726"></div></div>
                            <span class="macro-grams" id="fat-g">—</span>
                        </div>
                    </div>
                </div>

                <div class="tip-box" id="tip-box"></div>
            </div>

        </div>
    </div>
</div>

<footer class="footer">
    <a href="https://goo.gl/maps/CDJ3UKZhva5A2X327" class="location"><i class="fa-solid fa-location-dot"></i> Saudi Arabia, Alahssa</a>
    <div class="social-icons">
        <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
        <a href="mailto:MOVE@gym.org.sa"><i class="fa-solid fa-envelope"></i></a>
    </div>
    <p class="copyright">© MOVE, Inc.</p>
</footer>

<script>
    let gender   = 'male';
    let activity = 1.2;
    let goalAdj  = 0;

    function setGender(g) {
        gender = g;
        document.getElementById('btn-male').classList.toggle('active', g === 'male');
        document.getElementById('btn-female').classList.toggle('active', g === 'female');
    }

    function setActivity(btn) {
        document.querySelectorAll('.activity-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        activity = parseFloat(btn.dataset.val);
    }

    function setGoal(btn) {
        document.querySelectorAll('.goal-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        goalAdj = parseInt(btn.dataset.adj);
    }

    function calculate() {
        const h = parseFloat(document.getElementById('height').value);
        const w = parseFloat(document.getElementById('weight').value);
        const a = parseFloat(document.getElementById('age').value);

        if (!h || !w || !a || h < 100 || w < 30 || a < 10) {
            alert('Please fill in all fields with valid values.');
            return;
        }

        // Mifflin-St Jeor BMR
        let bmr = gender === 'male'
            ? (10 * w) + (6.25 * h) - (5 * a) + 5
            : (10 * w) + (6.25 * h) - (5 * a) - 161;

        const tdee   = Math.round(bmr * activity);
        const target = Math.round(tdee + goalAdj);
        bmr = Math.round(bmr);

        // BMI
        const bmi      = w / ((h / 100) ** 2);
        const bmiRound = Math.round(bmi * 10) / 10;

        // Macros (50% carbs, 25% protein, 25% fat)
        const carbCal = target * 0.50;
        const protCal = target * 0.25;
        const fatCal  = target * 0.25;
        const carbG   = Math.round(carbCal / 4);
        const protG   = Math.round(protCal / 4);
        const fatG    = Math.round(fatCal / 9);
        const maxG    = Math.max(carbG, protG, fatG);

        // BMI category
        let bmiCat, bmiColor, bmiPct, tip;
        if      (bmi < 18.5) { bmiCat = 'Underweight'; bmiColor = '#4fc3f7'; bmiPct = (bmi / 18.5) * 20; tip = '<strong>Tip:</strong> You may need to increase your calorie intake. Focus on nutrient-rich foods and consider consulting a dietitian.'; }
        else if (bmi < 25)   { bmiCat = 'Normal';       bmiColor = '#66bb6a'; bmiPct = 20 + ((bmi - 18.5) / 6.5) * 30; tip = '<strong>Great!</strong> Your BMI is in the healthy range. Maintain your current habits and stay active.'; }
        else if (bmi < 30)   { bmiCat = 'Overweight';   bmiColor = '#ffa726'; bmiPct = 50 + ((bmi - 25) / 5) * 25; tip = '<strong>Tip:</strong> A moderate calorie deficit and regular exercise can help you reach a healthy weight.'; }
        else                  { bmiCat = 'Obese';        bmiColor = '#ef5350'; bmiPct = Math.min(75 + ((bmi - 30) / 10) * 25, 97); tip = '<strong>Note:</strong> Consider consulting a healthcare professional for a personalized plan to reach a healthier weight.'; }

        // Goal description
        let goalDesc = goalAdj === 0 ? 'no change' : goalAdj > 0 ? `+${goalAdj} kcal surplus` : `${goalAdj} kcal deficit`;

        // Render
        document.getElementById('bmr-val').textContent    = bmr.toLocaleString();
        document.getElementById('tdee-val').textContent   = tdee.toLocaleString();
        document.getElementById('tdee-goal').textContent  = target.toLocaleString();
        document.getElementById('goal-adj').textContent   = Math.abs(goalAdj) || '±0';
        document.getElementById('goal-adj-desc').textContent = goalDesc;

        document.getElementById('bmi-val').textContent    = bmiRound;
        document.getElementById('bmi-cat').textContent    = bmiCat;
        document.getElementById('bmi-cat').style.background = bmiColor + '22';
        document.getElementById('bmi-cat').style.color      = bmiColor;
        document.getElementById('bmi-pointer').style.left   = Math.min(Math.max(bmiPct, 2), 97) + '%';

        document.getElementById('carb-g').textContent = carbG + 'g';
        document.getElementById('prot-g').textContent = protG + 'g';
        document.getElementById('fat-g').textContent  = fatG  + 'g';
        document.getElementById('carb-bar').style.width = (carbG / maxG * 100) + '%';
        document.getElementById('prot-bar').style.width = (protG / maxG * 100) + '%';
        document.getElementById('fat-bar').style.width  = (fatG  / maxG * 100) + '%';

        document.getElementById('tip-box').innerHTML = tip;

        const resultsEl = document.getElementById('results');
        resultsEl.style.display = 'block';
        resultsEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // video hover
    const video = document.getElementById('myVideo');
    if (video) {
        video.addEventListener('mouseover', () => video.play());
        video.addEventListener('mouseout',  () => video.pause());
    }
</script>
</body>
</html>
