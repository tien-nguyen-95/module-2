</div>
<hr>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="/public/js/time.js"></script>
    <footer style="font-size: 14px;">
        <div class="footer-copyright text-center py-1">
            <b>About Me:</b> <br>
            <a href="https://www.facebook.com/tien.tu.912" target="_blank"> Facebook: Tien Nguyen</a><br>
            <span>Email: quangtiennd95@gmail.com</span> <br>
            Time Sever: <span id="txt"></span>
            <?= "- " . date("d-m-Y", strtotime("+6 hours")) . "<br>"; ?>
        </div>
    </footer>

</body>
</html>