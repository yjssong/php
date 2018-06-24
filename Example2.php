1.  <?php echo 'XHTML나 XML 문서와 호환시키려면, 이렇게 쓰세요'; ?>

2.  <script language="php">
        echo '어떤 에디터 (프론트페이지같은)는 
              처리 명령을 좋아하지 않습니다';
    </script>

3.  <? echo '이런 형태가 제일 간단한 SGML 처리명령입니다'; ?>
    <?= expression ?>은 "<? echo expression ?>"을 간단히 쓴 모양입니다

4.  <% echo ("ASP스타일 태그를 쓸 수도 있습니다"); %>
    <%= $variable; # 이것은 "<% echo . . ." %>을 간단히 쓴 모양입니다