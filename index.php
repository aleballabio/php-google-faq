<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Google FAQ</title>
</head>

<body>
    <section>
        <?php
        /* PREFORMAT DOMANDA E RISPOSTA
[ "domanda" => "",
    "risposta" => [],

     "risposta" => [
                    "headerlist" => "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:",
                    "list" => [
                        "category" => "",

                        "sublist" => [
                            "",
                        ],
                    ],
                ],
],

*/

        $faq = [
            [
                "domanda" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
                "risposta" => [
                    "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.",

                    "Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.",

                    "If you have a removal request, please fill out this web form. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.",

                    "We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.",

                    "When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal."
                ],
            ],

            [
                "domanda" => "How does Google protect my privacy and keep my information secure?",
                "risposta" => [
                    "We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.",

                    "We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.",

                    "You can find out more about safety and security online, including how to protect yourself and your family online, at the Google Safety Centre.",

                    "Find out more about how we keep your personal information private and safe – and put you in control.",
                ],
            ],

            [
                "domanda" => "Why is my account associated with a country?",
                "risposta" => [
                    "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:",
                    "ilist" => [
                        "The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:",

                        "sublist" => [
                            "Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland",

                            "Google LLC, based in the United States, for the rest of the world",
                        ],
                    ],

                    "Google LLC, based in the United States, for the rest of the world",
                ],
            ],
        ];

        ?>

        <?php
        foreach ($faq as $value) {
            foreach ($value as $key => $contenuto) {
                if ($key === "domanda") {
                    echo "<h2>{$contenuto}</h2>";
                } else {
                    if (is_array($contenuto)) {
                        foreach ($contenuto as $subarr => $rispostam) {
                            if (is_array($rispostam)) {
                                echo "<ol>";
                                $i = 1;
                                foreach ($rispostam as $cat => $item) {

                                    if (is_array($item)) {
                                        echo "<li><ol type=\"a\">";
                                        $a = 1;
                                        $a++;
                                        foreach ($item as $item2) {
                                            if ($a === count($item)) {
                                                echo "<li>$item2</li></ol>";
                                            } else {
                                                $a++;
                                                echo "<li>$item2</li>";
                                            }
                                        }
                                    } else {
                                        if ($i === count($rispostam)) {
                                            echo "<li>{$item}</li></ol>";
                                        } else {
                                            $i++;
                                            echo "<li>{$item}</li>";
                                        }
                                    }
                                }
                            } else {
                                echo "<p>{$rispostam}</p>";
                            }
                        }
                    } else {
                        echo "<p>{$contenuto}</p>";
                    }
                }
            }
        }
        ?>
    </section>
</body>

</html>