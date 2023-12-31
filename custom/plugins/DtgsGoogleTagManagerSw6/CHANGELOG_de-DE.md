# 6.1.60
- Native Unterstützung von GA4

    
    ACHTUNG: Dies ist ein Major Update des Plugins für die Kompatibilität zu Google Analytics 4. Google wird zum 01.07.2023 das alte
    Universal Analytics (UA) abschalten. Mit dem Update auf diese Version wird das alte Enhanced Ecommerce deaktiviert (wir haben eine
    Funktion im Plugin hinterlegt, mit der Sie die alte Struktur noch eine Weile zurückholen können) und die neue GA4 Struktur wird
    aktiviert. Bitte prüfen Sie nach dem Update auf diese Plugin-Version, ob weiterhin alle Daten wie gewünscht in Google Analytics
    erscheinen. Weitere Informationen finden Sie zeitnah hier: https://www.codiverse.de/category/blog/

    Folgende Events werden von dieser Plugin Version unterstützt:

    - view_item_list
    - view_item
    - view_cart
    - begin_checkout
    - select_item
    - add_to_cart
    - remove_from_cart
    - purchase
    - confirm_order (Custom Event für die Bestellprüfungs-Seite)
    - add_payment_info

    Folgende Events wurden entfernt:

    - shopwareGTM.orderCompleted
    - gtmAddToCart
    - gtmRemoveFromCart

# 6.1.45
- Custom JS URLs können nun auch einen eigenen Dateinamen haben
- Datalayer enthält nun die Herstellernummer auf der Detailseite

# 6.1.44
- Neuer Wert für Enhanced Conversions im Checkout: transactionCountryIso (ISO 3166-1 ALPHA-2)
- Neuer Wert für Enhanced Conversions im Checkout: transactionStateName (sofern verfügbar)
- Anpassung: aw_feed_country im Adwords Tag enthält nun den 2stelligen Country Code
- Anpassung: aw_feed_language im Adwords Tag enthält nun den 2stelligen Language Code

# 6.1.43
- Preis und Menge im Addtocart Event sind nun numerische Werte, keine Strings
- Addtocart und Removefromcart werden nun unabhängig vom Cookie Consent gefeuert, um die Kompatibilität mit Drittanbieter Systemen zu erhöhen. Bitte überprüfen Sie Ihre Einstellungen in GTM
- Kleine Anpassung für den UserCentrics Code

# 6.1.42
- Optimierungen für Add to Cart auf Listenseiten

# 6.1.41
- Backend-Beschreibung (Plugin-Settings) optimiert

# 6.1.40
- Neu: eigene URL für GTM.js angeben. Mehr dazu siehe hier: https://www.demirjasarevic.com/gtm-js-skript-eigener-server/
- mehr Optionen für den Einsatz von Enhanced Conversions - bitte Plugin Einstellungen prüfen!

# 6.1.39
- Anpassungen für die Kompatibilität mit dem Custom Products Plugin

# 6.1.38
- GTM Basis Code enthält jetzt die volle HTTPS URL

# 6.1.37
- Anpassungen am noscript-Tag

# 6.1.36
- SW6.4.10.0 Kompatibilität

# 6.1.35
- neue Plugin Option: Maximale Anzahl an Produkten im Impressions-Array

# 6.1.34
- Neu: auf der Finish Seite wird nun auch die Kund*innen-Mailadresse im Datalayer (Key: transactionEmail) ausgegeben

# 6.1.33
- Bugfix für mögliche Fehler in Neu-Installationen
- Anpassungen am noscript-Template

# 6.1.32
- Bugfix für 404-Seiten
- Bugfix für Custom Products

# 6.1.31
- Bugfix für Account-Seiten und Checkout in Verbindung mit Remarketing

# 6.1.30
- ecomm_pagetype 'home' wird nun auf der Startseite ausgegeben
- Basis Tag Manager Code wird nun auch auf Nicht-Standard Shopseiten ausgegeben

# 6.1.29
- Anpassungen für die Kompatibilität mit dem Custom Products Plugin

# 6.1.28
- Anpassung für Steuer-Berechnung im Checkout

# 6.1.27
- Kategorie IDs werden im Datalayer nun auf Listing- und Detailseiten ausgegeben

# 6.1.26
- neue Plugin Option: UserCentrics Kompatibiltät aktivieren
- Ausgabe des GTM Codes auf Landingpages

# 6.1.25
- Checkout exception handling

# 6.1.24
- Anpassung für Steuer-Berechnung im Checkout

# 6.1.23
- Checkout exception handling

# 6.1.22
- Produkt Kategorie ist immer die SEO Kategorie

# 6.1.21
- Remove From Cart Event wird nun auch aus dem Off-Canvas-WK gefeuert

# 6.1.20
- Hersteller Name nun in EE Produkten enthalten
- Gutschein-Code wird im EE Code auf der Bestellabschluss-Seite ausgegeben

# 6.1.19
- Bugfix für Sales Channel, die keine ID enthalten

# 6.1.18
- Bugfix für PHP8 > 8.0.2

# 6.1.17
- SW6.4.0.0 Compatibility

# 6.1.16
- Bugfixes in Datalayer Service

# 6.1.15
- Bugfixes für Pagehiding

# 6.1.15
- Bugfixes für Gutscheineingabe im Checkout

# 6.1.14
- Bugfixes

# 6.1.13
- Bugfixes für Remarketing Code

# 6.1.12
- AddtoCart und RemoveFromCart nutzen nun die SKU
- kleinere Bugfixes

# 6.1.11
- Bugfix für SKU in EE Checkout Daten
- Bugfix für Steuern im Checkout
- Katogorienamen jetzt optional im EE Checkout verfügbar

# 6.1.10
- GTM Code auch auf Newsletter Register-/Subscribe-Seiten
- Bugfix für Nettopreise in Ländern ohne Steuer

# 6.1.9
- Bugfix für Bestellungen mit Gutscheinen

# 6.1.8
- Ausgabe des GTM Containers nun auch auf Fehlerseiten

# 6.1.7
- GA Cookies werden nun bei der Anpassung der Cookie Präferenzen entfernt

# 6.1.6
- Anpassungen bei der View Einbindung in Checkout/Confirm

# 6.1.5
- Bugfix für Versandarten
- Bugfix für leere Kategorie-Zuordnungen

# 6.1.4
- Bugfix für steuerfreie Länder
- Bugfix für Listenseite ohne Layoutzuweisung

# 6.1.3
- Bugfix für Einkaufswelten

# 6.1.2
- Listenseiten Performance Update

# 6.1.1
- Kompatibilitäts-Fix für Drittanbieter Plugins

# 6.1.0
- Enhanced Ecommerce Tracking JS Events (Addtocart & Removefromcart)
- Adwords Service integriert

# 6.0.5
- Bugfix für Detailseiten
- Bugfix für EE

# 6.0.4
- Bugfix für Multishops

# 6.0.3
- SW6.2.x Kompatibilität

# 6.0.2
- Enhanced Ecommerce Parameter eingebunden

# 6.0.1
- Remarketing Parameter eingebunden

# 6.0.0
- Erste Veröffentlichung
