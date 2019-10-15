# Export des données dans un format compatible Wizbii

* Utiliser les classes présentes dans `src/Model`
* Prendre pour exemple le code dans `example/example.php`
* Compresser le dump en JSON dans un ZIP si le fichier est trop lourd :)

Ce code devrait être compatible même avec PHP5 (peut-être même 5.3+)

# Example du format de données pour une question de code de la route

```json
{
  "id": "14",
  "type": "accident",
  "question_details": {
    "content": "Avant de quitter mon v\u00e9hicule, je v\u00e9rifie que\u00a0:",
    "medias": [
      {
        "content_type": "audio\/mpeg",
        "uri": "https:\/\/www.activpermis.com\/ftp\/2017\/Audios\/code2017p436q.mp3"
      },
      {
        "content_type": "audio\/ogg",
        "uri": "https:\/\/www.activpermis.com\/ftp\/2017\/Audios\/code2017p436q.ogg"
      },
      {
        "content_type": "image\/jpeg",
        "uri": "https:\/\/www.activpermis.com\/ftp\/2017\/Images\/code2017p436.jpg"
      }
    ]
  },
  "responses": [
    {
      "content": "le frein \u00e0 main est serr\u00e9",
      "possible_values": [
        {
          "content": "yes",
          "status": "valid"
        }
      ]
    },
    {
      "content": "les portes sont verrouill\u00e9es",
      "possible_values": [
        {
          "content": "yes",
          "status": "invalid"
        }
      ]
    },
    {
      "content": "le levier de vitesse est au point mort",
      "possible_values": [
        {
          "content": "yes",
          "status": "valid"
        }
      ]
    },
    {
      "content": "les vitres sont relev\u00e9es",
      "possible_values": [
        {
          "content": "yes",
          "status": "valid"
        }
      ]
    }
  ],
  "correction": {
    "content": "Une fois stationn\u00e9, le conducteur doit effectuer quelques v\u00e9rifications avant de quitter son v\u00e9hicule...",
    "medias": [
      {
        "content_type": "audio\/mpeg",
        "uri": "https:\/\/www.activpermis.com\/ftp\/2017\/Audios\/code2017p436r.mp3"
      },
      {
        "content_type": "audio\/ogg",
        "uri": "https:\/\/www.activpermis.com\/ftp\/2017\/Audios\/code2017p436r.ogg"
      }
    ]
  }
}
```

D'autres exemples peuvent être trouvés en exécutant le fichier `example/example.php`

# Example du format de données pour une série (thématique ou non) de questions

```json
{
  "id": "64",
  "type": "global",
  "question_ids": [
    "17",
    "62",
    "68"
  ]
}
```

D'autres exemples peuvent être trouvés en exécutant le fichier `example/example.php`