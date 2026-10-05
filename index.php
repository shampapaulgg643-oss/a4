<?php
// Stingray Manor — homepage
$note = ''; $good = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['manor_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'manor_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['fax'])) { $good = true; $note = 'Thank you.'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $good = true; $note = 'Thank you. Your first Manor Letter will arrive at the start of next month.';
    } else { $note = 'Please enter a valid email address.'; }
}
$season = ['Winter', 'Winter', 'Spring', 'Spring', 'Spring', 'Summer', 'Summer', 'Summer', 'Autumn', 'Autumn', 'Autumn', 'Winter'][(int) date('n') - 1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stingray Manor | A Guide to Luxury Handbags &amp; Fine Leathers</title>
<meta name="description" content="An independent guide to luxury handbags: stingray and exotic leathers, craftsmanship, classic silhouettes, a buyer's checklist and expert bag care tips.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.stingraymanor.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Stingray Manor">
<meta property="og:title" content="Stingray Manor | A Guide to Luxury Handbags &amp; Fine Leathers"><meta property="og:description" content="An independent guide to luxury handbags: stingray and exotic leathers, craftsmanship, classic silhouettes, a buyer's checklist and expert bag care tips.">
<meta property="og:url" content="https://www.stingraymanor.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1589363358751-ab05797e5629?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#0E1A17">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48'%3E%3Crect width='48' height='48' fill='%230E1A17'/%3E%3Cpath d='M24 8 C33 13 40 20 42 29 C35 27 30 29 24 40 C18 29 13 27 6 29 C8 20 15 13 24 8Z' fill='none' stroke='%23B8904F' stroke-width='2.4'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&family=Italiana&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Stingray Manor", "url": "https://www.stingraymanor.com/", "email": "concierge@stingraymanor.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What exactly is stingray leather?", "acceptedAnswer": {"@type": "Answer", "text": "Stingray leather, also called shagreen or galuchat, is made from the skin of certain species of stingray. Its surface is covered with tiny calcified nodules that give it a pebbled, bead-like texture. The skin is tanned, often sanded and polished, and then dyed."}}, {"@type": "Question", "name": "Is stingray leather durable?", "acceptedAnswer": {"@type": "Answer", "text": "Very. The mineral nodules make it far more resistant to scratches, scuffs and water than most leathers. The main risk is at folded edges and seams, where the hard surface can crack if the leather is bent sharply."}}, {"@type": "Question", "name": "Is it legal to buy exotic leather bags?", "acceptedAnswer": {"@type": "Answer", "text": "Rules vary by country and by species. Some exotic skins are regulated under international wildlife trade agreements such as CITES. Always buy from reputable sellers who can explain the origin of the material, and check the rules before travelling across borders with an exotic leather item."}}, {"@type": "Question", "name": "How can I tell if a bag is well made?", "acceptedAnswer": {"@type": "Answer", "text": "Look closely at stitching, edges, hardware and lining. Even, tight stitches, smooth painted edges, heavy hardware and a neatly finished interior are reliable signs of quality, regardless of the name on the label."}}, {"@type": "Question", "name": "Does Stingray Manor sell handbags?", "acceptedAnswer": {"@type": "Answer", "text": "No. Stingray Manor is an independent editorial guide. We do not sell bags and are not affiliated with any brand or fashion house. Our goal is to help you understand, choose and care for fine handbags."}}, {"@type": "Question", "name": "How should I store a luxury bag?", "acceptedAnswer": {"@type": "Answer", "text": "Stuff it lightly with acid-free tissue to hold its shape, place it in a breathable cotton dust bag and store it upright on a shelf away from sunlight and heat. Avoid plastic, which traps moisture."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="hdr-top">
    <span class="l">A guide to fine handbags</span>
    <a class="crest" href="index.php" aria-label="Stingray Manor home"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 6 C34 12 42 20 44 30 C36 28 30 30 24 42 C18 30 12 28 4 30 C6 20 14 12 24 6Z" fill="none" stroke="#B8904F" stroke-width="1.6"/><circle cx="24" cy="22" r="1.8" fill="#E4CFA6"/><circle cx="24" cy="28" r="1.4" fill="#E4CFA6"/><circle cx="24" cy="16" r="1.2" fill="#E4CFA6"/></svg><span>Stingray Manor</span></a>
    <span class="r"><a href="index.php#letter">The Manor Letter</a></span>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
  <nav aria-label="Main navigation"><ul class="nav" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="leather-guide.html">Leather Guide</a></li><li><a href="bag-care.html">Bag Care</a></li><li><a href="about.html">The Manor</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
</header>
<main id="main">
<section class="hero shagreen">
  <div class="wrap hero-grid">
    <div>
      <span class="ey">The <?php echo $season; ?> Edition</span>
      <h1>The quiet art of the <i>fine handbag</i></h1>
      <p>Stingray Manor is an independent guide to luxury bags. We explore rare leathers like shagreen, the craftsmanship behind a well-made piece and the simple rituals that help a bag last a lifetime.</p>
      <div class="ctas"><a class="btn" href="leather-guide.html">Read the Leather Guide</a><a class="btn btn--ghost" href="bag-care.html">Caring for your bag</a></div>
    </div>
    <div class="frames">
      <div class="frame a"><img src="https://images.unsplash.com/photo-1589363358751-ab05797e5629?auto=format&fit=crop&w=800&q=75" alt="metallic handbag beside a rose gold watch on a beige trench coat" width="800" height="1000" fetchpriority="high"></div>
      <div class="frame b"><img src="https://images.unsplash.com/photo-1571829604981-ea159f94e5ad?auto=format&fit=crop&w=600&q=75" alt="close-up of rich brown leather" width="600" height="520"></div>
    </div>
  </div>
</section>

<section class="intro" aria-labelledby="intro-t">
  <div class="wrap intro-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1782061817195-bd45b7f992ec?auto=format&fit=crop&w=800&q=75" alt="woman walking through a sunny city street" width="800" height="1000" loading="lazy"></div>
    <div>
      <span class="ey">Welcome to the Manor</span>
      <h2 id="intro-t">Buy fewer bags. Know them better.</h2>
      <p class="dc">A truly fine handbag is not defined by a logo. It is defined by the hide it was cut from, the hands that stitched it and the care it receives long after it leaves the shop. Those details are what separate a bag that looks tired in two years from one you can hand down.</p>
      <p>Here you will find calm, practical writing on leathers, silhouettes, construction and care. We do not sell bags and we are not tied to any label, so our only interest is helping you choose well and look after what you own.</p>
      <p class="sig">&mdash; The editors</p>
    </div>
  </div>
</section>

<section class="anatomy" aria-labelledby="ana-t">
  <div class="wrap">
    <span class="ey">Anatomy of quality</span>
    <h2 id="ana-t" style="margin-bottom:40px">Five places to look before you fall in love</h2>
    <div class="ana-grid">
      <div class="ana-img"><img src="https://images.unsplash.com/photo-1614179689702-355944cd0918?auto=format&fit=crop&w=800&q=75" alt="black leather handbag with silver hardware resting on a white sheet" width="800" height="1000" loading="lazy"><button type="button" class="spot" style="left:50%;top:12%" aria-pressed="true" aria-label="Show detail 1: Handles & straps">1</button><button type="button" class="spot" style="left:30%;top:38%" aria-pressed="false" aria-label="Show detail 2: Hardware">2</button><button type="button" class="spot" style="left:72%;top:48%" aria-pressed="false" aria-label="Show detail 3: Stitching">3</button><button type="button" class="spot" style="left:22%;top:70%" aria-pressed="false" aria-label="Show detail 4: Edges">4</button><button type="button" class="spot" style="left:62%;top:84%" aria-pressed="false" aria-label="Show detail 5: Base & structure">5</button></div>
      <ol class="ana-list"><li class="on"><h3>1. Handles &amp; straps</h3><p>Look for handles that are folded, stitched and edge-finished rather than simply glued. A good handle keeps its shape after years of carrying.</p></li><li class=""><h3>2. Hardware</h3><p>Solid, weighty metal with smooth plating and crisp engraving. Zips should glide without catching, and clasps should close with a clean, confident click.</p></li><li class=""><h3>3. Stitching</h3><p>Small, even, slightly slanted stitches in straight lines. Saddle stitching, done by hand with two needles, will not unravel even if a thread breaks.</p></li><li class=""><h3>4. Edges</h3><p>Leather edges are sanded and painted or burnished in several layers. They should be smooth, even and free of cracks or blobs.</p></li><li class=""><h3>5. Base &amp; structure</h3><p>Protective feet, a firm but not stiff base and a bag that stands upright on its own are signs of careful internal construction.</p></li></ol>
    </div>
  </div>
</section>

<section class="leathers" aria-labelledby="lea-t">
  <div class="wrap">
    <span class="ey">The leathers</span>
    <h2 id="lea-t">Four surfaces, four personalities</h2>
    <p class="muted" style="max-width:620px;margin-bottom:40px">Select a panel to learn how each leather looks, feels and ages. The right choice depends as much on how you live as on what you love.</p>
    <div class="panels"><button type="button" class="lp" aria-expanded="false"><img src="https://images.unsplash.com/photo-1716295177956-420a647c83ac?auto=format&fit=crop&w=900&q=75" alt="close-up of smooth brown leather texture" width="900" height="900" loading="lazy"><span class="t"><span class="h">Smooth calfskin</span><span class="d">Fine-grained, supple and elegant. Calfskin takes colour beautifully and develops a soft sheen with use, though it shows scratches more readily than textured leathers.</span></span></button><button type="button" class="lp" aria-expanded="true"><img src="https://images.unsplash.com/photo-1755541608566-0340d4efca0d?auto=format&fit=crop&w=900&q=75" alt="dark blue leather with a pebbled, beaded texture" width="900" height="900" loading="lazy"><span class="t"><span class="h">Stingray (shagreen)</span><span class="d">Covered in tiny, hard, pearl-like beads, shagreen is one of the toughest exotic leathers. It resists scratches and water remarkably well and has a distinctive shimmer when polished.</span></span></button><button type="button" class="lp" aria-expanded="false"><img src="https://images.unsplash.com/photo-1573227896778-8f378c4029d4?auto=format&fit=crop&w=900&q=75" alt="assorted colours of textured leather laid side by side" width="900" height="900" loading="lazy"><span class="t"><span class="h">Grained leather</span><span class="d">Pebbled or embossed grains hide everyday marks and keep their shape, making them a practical favourite for work totes and daily shoulder bags.</span></span></button><button type="button" class="lp" aria-expanded="false"><img src="https://images.unsplash.com/photo-1647960514922-052047430407?auto=format&fit=crop&w=900&q=75" alt="close-up of glossy red leather" width="900" height="900" loading="lazy"><span class="t"><span class="h">Finished &amp; coloured</span><span class="d">Leathers with a protective top coat, from glazed to high-shine patent, are easy to wipe clean and hold vivid colour, but creases can become permanent if stored folded.</span></span></button></div>
  </div>
</section>

<section class="shapes shagreen" aria-labelledby="sh-t">
  <div class="wrap">
    <span class="ey">Silhouettes</span>
    <h2 id="sh-t" style="margin-bottom:44px">A field guide to classic shapes</h2>
    <div class="shape-grid"><figure class="shape" tabindex="0"><img src="https://images.unsplash.com/photo-1760624294582-5341f33f9fa4?auto=format&fit=crop&w=700&q=75" alt="three leather tote bags in different colours" width="700" height="875" loading="lazy"><figcaption><h3>The Tote</h3><p>Open, roomy and endlessly practical. Choose a structured base and an inner zip pocket so it stays tidy when full.</p></figcaption></figure><figure class="shape" tabindex="0"><img src="https://images.unsplash.com/photo-1598552105309-9243044d2002?auto=format&fit=crop&w=700&q=75" alt="silver leather pouch with red beads" width="700" height="875" loading="lazy"><figcaption><h3>The Clutch</h3><p>Small, handheld and made for evenings. A detachable chain adds flexibility when you need your hands free.</p></figcaption></figure><figure class="shape" tabindex="0"><img src="https://images.unsplash.com/photo-1774560827904-c1daaa7c45fd?auto=format&fit=crop&w=700&q=75" alt="person in a black coat wearing a woven leather crossbody bag" width="700" height="875" loading="lazy"><figcaption><h3>The Crossbody</h3><p>Secure and hands-free for city days and travel. Look for an adjustable strap that sits at hip height.</p></figcaption></figure><figure class="shape" tabindex="0"><img src="https://images.unsplash.com/photo-1605733513597-a8f8341084e6?auto=format&fit=crop&w=700&q=75" alt="grey leather satchel with gold buckles" width="700" height="875" loading="lazy"><figcaption><h3>The Satchel</h3><p>A structured, flap-front shape with scholarly roots. Buckles and a top handle give it a polished, timeless look.</p></figcaption></figure><figure class="shape" tabindex="0"><img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=700&q=75" alt="red leather top-handle handbag on a white table" width="700" height="875" loading="lazy"><figcaption><h3>The Top-Handle</h3><p>The most formal silhouette, carried in the hand or crook of the arm. Proportion and perfect symmetry are everything here.</p></figcaption></figure><figure class="shape" tabindex="0"><img src="https://images.unsplash.com/photo-1637759292654-a12cb2be085e?auto=format&fit=crop&w=700&q=75" alt="brown leather handbag with a long strap" width="700" height="875" loading="lazy"><figcaption><h3>The Shoulder Bag</h3><p>Sits comfortably under the arm with a medium-length strap. A versatile everyday choice that suits almost any outfit.</p></figcaption></figure></div>
  </div>
</section>

<section class="ray" aria-labelledby="ray-t">
  <div class="wrap ray-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1765282946813-d9ccda14c415?auto=format&fit=crop&w=800&q=75" alt="golden handbag resting on books on a wooden shelf" width="800" height="880" loading="lazy"></div>
    <div>
      <span class="ey">Our namesake</span>
      <h2 id="ray-t">Stingray leather, explained</h2>
      <p>Few materials have a story quite like shagreen. Prized in eighteenth-century Europe for sword grips and small cases, and valued far longer in parts of Asia, it has returned in recent decades as one of the most distinctive exotic leathers in fine accessories.</p>
      <ol class="facts">
        <li><div><h3>A surface of tiny pearls</h3><p>The skin is covered in small calcium-rich nodules. Left natural, they feel like fine beads; sanded flat and polished, they reveal a glassy, cellular pattern.</p></div></li>
        <li><div><h3>The &ldquo;crown&rdquo;</h3><p>Many hides have a cluster of larger, lighter nodules along the spine, often called the crown or eye. Its placement on a bag is a deliberate design decision.</p></div></li>
        <li><div><h3>Remarkably tough</h3><p>Shagreen resists scratches, scuffs and light rain far better than most leathers, which is why it has long been used on objects meant to be handled daily.</p></div></li>
        <li><div><h3>Hard to work</h3><p>Its hardness dulls blades and makes stitching slow. It is usually used in panels rather than folded, so expect careful, skilled construction and a higher price.</p></div></li>
        <li><div><h3>Ask about origin</h3><p>Responsible makers can explain where the skins come from and what paperwork applies. Rules on exotic materials differ between countries, so ask before you buy or travel.</p></div></li>
      </ol>
    </div>
  </div>
</section>

<section class="craft" aria-labelledby="cr-t">
  <div class="wrap">
    <span class="ey">From hide to handle</span>
    <h2 id="cr-t">How a fine bag is made</h2>
    <div class="steps">
      <div><b>Step one</b><h3>Selecting</h3><p>Hides are inspected for scars and thin areas; only the best sections are marked for visible panels.</p></div>
      <div><b>Step two</b><h3>Cutting</h3><p>Pieces are cut by hand or die, following the grain so each panel stretches and ages evenly.</p></div>
      <div><b>Step three</b><h3>Skiving</h3><p>Edges are thinned so seams lie flat and folds stay crisp without adding bulk.</p></div>
      <div><b>Step four</b><h3>Stitching</h3><p>Panels are joined by machine or saddle-stitched by hand with waxed linen or polyester thread.</p></div>
      <div><b>Step five</b><h3>Finishing</h3><p>Edges are painted and polished in layers, hardware is set and the bag is shaped and inspected.</p></div>
    </div>
    <div class="craft-pics">
      <div class="pic"><img src="https://images.unsplash.com/photo-1628483211662-9bcc692c46dc?auto=format&fit=crop&w=900&q=75" alt="leather wallet, thread and scissors laid out on a work table" width="900" height="560" loading="lazy"></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1647502191516-68a4f8c74ed4?auto=format&fit=crop&w=700&q=75" alt="assortment of leatherworking tools on a cutting board" width="700" height="440" loading="lazy"></div>
    </div>
  </div>
</section>

<section class="check" aria-labelledby="ck-t">
  <div class="wrap check-grid">
    <div>
      <span class="ey">Before you buy</span>
      <h2 id="ck-t">A calm buyer&#8217;s checklist</h2>
      <p class="muted">Take your time with an important purchase. These questions apply whether you are buying new, pre-owned or vintage.</p>
      <a class="btn btn--dark" href="leather-guide.html">Compare leathers</a>
    </div>
    <div class="ticks">
      <div class="tick"><h3>Does it fit your life?</h3><p>Check that it holds what you carry daily, and that the strap sits comfortably on your body.</p></div>
      <div class="tick"><h3>Is the leather even?</h3><p>Colour and grain should match across panels, with no thin, cracked or overly shiny patches.</p></div>
      <div class="tick"><h3>Are the details clean?</h3><p>Stitches straight and tight, edges smooth, no glue residue around seams or hardware.</p></div>
      <div class="tick"><h3>Is the inside finished?</h3><p>Linings should be taut and neatly stitched, with pockets that feel sturdy, not flimsy.</p></div>
      <div class="tick"><h3>Can it be repaired?</h3><p>Ask whether the maker or a local specialist can replace handles, zips or edge paint later.</p></div>
      <div class="tick"><h3>Is the seller transparent?</h3><p>Clear information about materials, origin and returns is a good sign, especially for exotic leathers.</p></div>
    </div>
  </div>
</section>

<section class="care shagreen" aria-labelledby="ca-t">
  <div class="wrap">
    <span class="ey">The care rhythm</span>
    <h2 id="ca-t">Small habits, long life</h2>
    <div class="care-grid">
      <div><h3>Every day</h3><ul><li>Set your bag down on a clean surface, never the floor.</li><li>Keep pens capped and cosmetics in a pouch.</li><li>Avoid overfilling so the shape holds.</li></ul></div>
      <div><h3>Every month</h3><ul><li>Empty it completely and shake out crumbs.</li><li>Wipe leather with a soft, dry cloth.</li><li>Check handles and stitching for early wear.</li></ul></div>
      <div><h3>Every season</h3><ul><li>Condition smooth leathers sparingly after a spot test.</li><li>Store lightly stuffed in a cotton dust bag.</li><li>Take worn edges or handles to a repair specialist.</li></ul></div>
    </div>
    <p style="margin-top:30px"><a class="btn btn--ghost" href="bag-care.html">Read the full care guide</a></p>
  </div>
</section>

<section class="occ" aria-labelledby="oc-t">
  <div class="wrap">
    <span class="ey">Wearing it well</span>
    <h2 id="oc-t" style="margin-bottom:44px">One wardrobe, three moods</h2>
    <div class="occ-grid">
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1649544284889-2c30c3267013?auto=format&fit=crop&w=600&q=75" alt="woman in a white dress carrying a red handbag outdoors" width="600" height="800" loading="lazy"></div><h3>Weekend ease</h3><p>A bright top-handle or small shoulder bag lifts simple summer clothes. Let the bag be the one bold colour in the outfit.</p></article>
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1654707636750-ab67a11b21b7?auto=format&fit=crop&w=600&q=75" alt="brown leather purse on a table next to an open book" width="600" height="800" loading="lazy"></div><h3>Working days</h3><p>A structured tote in a neutral grained leather fits a laptop sleeve and still looks polished in a meeting.</p></article>
      <article><div class="pic"><img src="https://images.unsplash.com/photo-1789110854836-a7e790d83736?auto=format&fit=crop&w=600&q=75" alt="person in a white eyelet dress holding a bright pink studded clutch" width="600" height="800" loading="lazy"></div><h3>After dark</h3><p>Evening is where exotic textures shine. A compact clutch in shagreen or metallic leather needs little else.</p></article>
    </div>
  </div>
</section>

<section class="quote">
  <div class="wrap"><blockquote>The best bag you own is the one you still reach for in twenty years, softer, a little marked, and entirely yours.</blockquote><cite>A founding note from the Stingray Manor editors</cite></div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="ey">Questions</span><h2 id="fq-t">What readers ask us most</h2><p class="muted">If your question is not here, our concierge inbox is always open.</p><a class="btn btn--dark" href="contact.html">Ask the editors</a></div>
    <div><details open><summary>What exactly is stingray leather?</summary><p>Stingray leather, also called shagreen or galuchat, is made from the skin of certain species of stingray. Its surface is covered with tiny calcified nodules that give it a pebbled, bead-like texture. The skin is tanned, often sanded and polished, and then dyed.</p></details><details><summary>Is stingray leather durable?</summary><p>Very. The mineral nodules make it far more resistant to scratches, scuffs and water than most leathers. The main risk is at folded edges and seams, where the hard surface can crack if the leather is bent sharply.</p></details><details><summary>Is it legal to buy exotic leather bags?</summary><p>Rules vary by country and by species. Some exotic skins are regulated under international wildlife trade agreements such as CITES. Always buy from reputable sellers who can explain the origin of the material, and check the rules before travelling across borders with an exotic leather item.</p></details><details><summary>How can I tell if a bag is well made?</summary><p>Look closely at stitching, edges, hardware and lining. Even, tight stitches, smooth painted edges, heavy hardware and a neatly finished interior are reliable signs of quality, regardless of the name on the label.</p></details><details><summary>Does Stingray Manor sell handbags?</summary><p>No. Stingray Manor is an independent editorial guide. We do not sell bags and are not affiliated with any brand or fashion house. Our goal is to help you understand, choose and care for fine handbags.</p></details><details><summary>How should I store a luxury bag?</summary><p>Stuff it lightly with acid-free tissue to hold its shape, place it in a breathable cotton dust bag and store it upright on a shelf away from sunlight and heat. Avoid plastic, which traps moisture.</p></details></div>
  </div>
</section>

<section class="letter shagreen" id="letter" aria-labelledby="lt-t">
  <div class="pic"><img src="https://images.unsplash.com/photo-1705909237050-7a7625b47fac?auto=format&fit=crop&w=1000&q=75" alt="black leather bag against a yellow background" width="1000" height="700" loading="lazy"></div>
  <div class="in">
    <span class="ey">Monthly, never more</span>
    <h2 id="lt-t">The Manor Letter</h2>
    <p style="color:#C4D1CC">One thoughtful email a month on leathers, craft and care, plus a seasonal note on what we are noticing. Free, and easy to unsubscribe.</p>
    <?php if ($note): ?><p class="<?php echo $good ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($note, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
    <form method="post" action="index.php#letter">
      <label for="me" class="skip">Email address</label>
      <input type="email" id="me" name="manor_email" placeholder="Your email address" required autocomplete="email">
      <input type="text" name="fax" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
      <button class="btn" type="submit">Subscribe</button>
    </form>
    <p class="small">See our <a href="privacy-policy.html">Privacy Policy</a> for how we use your email.</p>
  </div>
</section>
</main>
<footer class="ftr shagreen">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="crest" href="index.php"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M24 6 C34 12 42 20 44 30 C36 28 30 30 24 42 C18 30 12 28 4 30 C6 20 14 12 24 6Z" fill="none" stroke="#B8904F" stroke-width="1.6"/><circle cx="24" cy="22" r="1.8" fill="#E4CFA6"/><circle cx="24" cy="28" r="1.4" fill="#E4CFA6"/><circle cx="24" cy="16" r="1.2" fill="#E4CFA6"/></svg><span>Stingray Manor</span></a><p>An independent guide to luxury handbags: the leathers, the craft, the silhouettes and the care that keeps a beautiful bag beautiful for decades.</p></div>
      <div><h4>Explore</h4><a href="index.php">Home</a><a href="leather-guide.html">Leather Guide</a><a href="bag-care.html">Bag Care</a><a href="about.html">The Manor</a><a href="contact.html">Contact</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Visit</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:concierge@stingraymanor.com">concierge@stingraymanor.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Stingray Manor. All rights reserved.</span><span>Photography from Unsplash under the Unsplash License. Stingray Manor is not affiliated with any fashion house.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your permission, analytics cookies to improve our guides. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
