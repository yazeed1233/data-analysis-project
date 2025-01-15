-- حذف الجدول إذا كان موجودًا
DROP TABLE IF EXISTS `months`;

-- إنشاء جدول جديد لتخزين أسماء الأشهر
CREATE TABLE `months` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `gregorian_month` VARCHAR(50) NOT NULL, -- الاسم بالصيغة الجريجورية (الإنجليزية التقليدية)
  `alternative_month` VARCHAR(50) NOT NULL, -- الاسم البديل (مثل Arabic equivalent بالإنجليزية)
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- إدخال البيانات الجديدة
INSERT INTO `months` (`gregorian_month`, `alternative_month`) VALUES
('January', 'Kanun Al-Thani'),
('February', 'Shubat'),
('March', 'Adar'),
('April', 'Nisan'),
('May', 'Ayyar'),
('June', 'Haziran'),
('July', 'Tammuz'),
('August', 'Ab'),
('September', 'Aylul'),
('October', 'Tishrin Al-Awwal'),
('November', 'Tishrin Al-Thani'),
('December', 'Kanun Al-Awwal');

-- استعلام لاسترجاع الاسم البديل عند إدخال الاسم الجريجوري
SELECT alternative_month
FROM months
WHERE gregorian_month = 'September';

-- استعلام لاسترجاع الاسم الجريجوري عند إدخال الاسم البديل
SELECT gregorian_month
FROM months
WHERE alternative_month = 'Aylul';
