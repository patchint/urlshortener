# URLShortener

# Summary

- [Description](#description)
- [Installation](#installation)
- [Contribute](#contribute)

# Description

I made this project because I see a lot of solutions to shorten links but most of them are either not maintained or are gasworks or both.

And because I was bored :')

# Installation

## Database preparation

Create a MariaDB database with this table : 

```sql
CREATE TABLE `urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `original_url` varchar(1024) DEFAULT NULL,
  `short_code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

TODO

# Contribute

TODO
