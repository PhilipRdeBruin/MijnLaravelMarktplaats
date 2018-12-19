
<!DOCTYPE html>
<html lang="nl">
'
	@include('includes.head')

	<body>
		<header>
            <h2 id="titel">Mijn Marktplaats</h2>
        </header>

        <section id="content">
            <nav>
                @include('includes.nav')
<!--                @yield('navbar')  -->
            </nav>

            <div class="hoofdsectie">
                @yield('hoofdsectie')
            </div>

            <aside>
                @include('includes.aside')
            </aside>
        </section>

        <footer>
		    @include('includes.footer')
        </footer>
	</body>
</html>
