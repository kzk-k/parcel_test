<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- <link rel="icon" href=""> -->
	<title>crawler_count</title>
<!-- 	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">
	<link rel="stylesheet" href="./assets/css/index.css"> -->
</head>
<body>
	<div id="app">
		<main class="l-mainContainer">
			<form action="./">
				<div class="mdl-card">
					<div class="mod-inputUrl">
						<ol class="">
							<?php for ($i = 0; $i < 10; $i++) { ?>
								<li class="inputUrl-item js-inputUrl-item">
									<!-- <i class="material-icons">textsms</i> -->
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input js-inputUrl" type="text" id="inputUrl[<?= $i; ?>]">
										<label class="mdl-textfield__label" for="inputUrl[<?= $i; ?>]">URLを入力</label>
									</div>
								</li>
							<?php } ?>
						</ol>
					</div>
				</div>
				<button class="btn-add mdl-button mdl-button--colored mdl-js-button mdl-button--raised mdl-js-ripple-effect js-addInput" type="button">
					<i class="material-icons">add</i>更に追加
				</button>


				<div class="mdl-card">
					<div class="mod-inputDate">
						<?php for ($i = 0; $i < 2; $i++) { ?>
							<div class="inputDate-item">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input flatpickr" type="text" id="datepicker[<?= $i; ?>]">
									<label class="mdl-textfield__label" for="datepicker[<?= $i; ?>]">日付を選択</label>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

				<div class="btnWrap">
					<button class="btn-send mdl-button mdl-button--accent mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
						送信<i class="material-icons">send</i>
					</button>
				</div>
			</form>
		</main>
		<footer class="l-footer">
			<small class="copyright">Get Google Crawler Count</small>
		</footer>
	</div>

<!-- 	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script> -->
	<script defer src="./assets/js/index.js"></script>
</body>
</html>
