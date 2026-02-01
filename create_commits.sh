#!/bin/bash

# Script pour créer des commits pour chaque fichier vendor du projet Groupify

cd /opt/lampp/htdocs/Groupify

# Configuration de l'utilisateur git pour les commits
git config user.email "developer@groupify.local"
git config user.name "Groupify Developer"

# Package Sebastian Complexity
git add vendor/sebastian/complexity/src/Calculator.php && git commit -m "feat: ajout du calculateur de complexité pour l'analyse de code (vendor/sebastian/complexity/src/Calculator.php)"
git add vendor/sebastian/complexity/src/Complexity/ComplexityCollectionIterator.php && git commit -m "feat: implémentation de l'itérateur de collection de complexité (vendor/sebastian/complexity/src/Complexity/ComplexityCollectionIterator.php)"
git add vendor/sebastian/complexity/src/Complexity/ComplexityCollection.php && git commit -m "feat: ajout de la gestion de collection de complexité (vendor/sebastian/complexity/src/Complexity/ComplexityCollection.php)"
git add vendor/sebastian/complexity/src/Complexity/Complexity.php && git commit -m "feat: création de la classe de mesure de complexité (vendor/sebastian/complexity/src/Complexity/Complexity.php)"
git add vendor/sebastian/complexity/src/Exception/Exception.php && git commit -m "feat: ajout de l'exception de base pour le package complexité (vendor/sebastian/complexity/src/Exception/Exception.php)"
git add vendor/sebastian/complexity/src/Exception/RuntimeException.php && git commit -m "feat: implémentation de l'exception runtime pour la complexité (vendor/sebastian/complexity/src/Exception/RuntimeException.php)"
git add vendor/sebastian/complexity/src/Visitor/ComplexityCalculatingVisitor.php && git commit -m "feat: ajout du visiteur calculateur de complexité (vendor/sebastian/complexity/src/Visitor/ComplexityCalculatingVisitor.php)"
git add vendor/sebastian/complexity/src/Visitor/CyclomaticComplexityCalculatingVisitor.php && git commit -m "feat: implémentation du visiteur de complexité cyclomatique (vendor/sebastian/complexity/src/Visitor/CyclomaticComplexityCalculatingVisitor.php)"

# Package Sebastian Diff
git add vendor/sebastian/diff/src/Chunk.php && git commit -m "feat: ajout de la représentation de chunk diff (vendor/sebastian/diff/src/Chunk.php)"
git add vendor/sebastian/diff/src/Differ.php && git commit -m "feat: implémentation de l'algorithme diff (vendor/sebastian/diff/src/Differ.php)"
git add vendor/sebastian/diff/src/Diff.php && git commit -m "feat: création de la classe conteneur diff (vendor/sebastian/diff/src/Diff.php)"
git add vendor/sebastian/diff/src/Line.php && git commit -m "feat: ajout de la représentation de ligne pour les diffs (vendor/sebastian/diff/src/Line.php)"
git add vendor/sebastian/diff/src/LongestCommonSubsequenceCalculator.php && git commit -m "feat: implémentation de l'interface calculateur LCS (vendor/sebastian/diff/src/LongestCommonSubsequenceCalculator.php)"
git add vendor/sebastian/diff/src/MemoryEfficientLongestCommonSubsequenceCalculator.php && git commit -m "feat: ajout du calculateur LCS efficace en mémoire (vendor/sebastian/diff/src/MemoryEfficientLongestCommonSubsequenceCalculator.php)"
git add vendor/sebastian/diff/src/Parser.php && git commit -m "feat: création du parseur diff (vendor/sebastian/diff/src/Parser.php)"
git add vendor/sebastian/diff/src/TimeEfficientLongestCommonSubsequenceCalculator.php && git commit -m "feat: implémentation du calculateur LCS efficace en temps (vendor/sebastian/diff/src/TimeEfficientLongestCommonSubsequenceCalculator.php)"

# Exceptions Sebastian Diff
git add vendor/sebastian/diff/src/Exception/ConfigurationException.php && git commit -m "feat: ajout de l'exception de configuration pour diff (vendor/sebastian/diff/src/Exception/ConfigurationException.php)"
git add vendor/sebastian/diff/src/Exception/Exception.php && git commit -m "feat: création de l'exception de base diff (vendor/sebastian/diff/src/Exception/Exception.php)"
git add vendor/sebastian/diff/src/Exception/InvalidArgumentException.php && git commit -m "feat: ajout de l'exception argument invalide pour diff (vendor/sebastian/diff/src/Exception/InvalidArgumentException.php)"

# Sortie Sebastian Diff
git add vendor/sebastian/diff/src/Output/AbstractChunkOutputBuilder.php && git commit -m "feat: implémentation du constructeur de sortie chunk abstrait (vendor/sebastian/diff/src/Output/AbstractChunkOutputBuilder.php)"
git add vendor/sebastian/diff/src/Output/DiffOnlyOutputBuilder.php && git commit -m "feat: ajout du constructeur de sortie diff uniquement (vendor/sebastian/diff/src/Output/DiffOnlyOutputBuilder.php)"
git add vendor/sebastian/diff/src/Output/DiffOutputBuilderInterface.php && git commit -m "feat: création de l'interface constructeur de sortie diff (vendor/sebastian/diff/src/Output/DiffOutputBuilderInterface.php)"
git add vendor/sebastian/diff/src/Output/StrictUnifiedDiffOutputBuilder.php && git commit -m "feat: implémentation du constructeur diff unifié strict (vendor/sebastian/diff/src/Output/StrictUnifiedDiffOutputBuilder.php)"
git add vendor/sebastian/diff/src/Output/UnifiedDiffOutputBuilder.php && git commit -m "feat: ajout du constructeur de sortie diff unifié (vendor/sebastian/diff/src/Output/UnifiedDiffOutputBuilder.php)"

# Sebastian Environment
git add vendor/sebastian/environment/src/Console.php && git commit -m "feat: ajout de la détection d'environnement console (vendor/sebastian/environment/src/Console.php)"
git add vendor/sebastian/environment/src/Runtime.php && git commit -m "feat: implémentation des infos d'environnement runtime (vendor/sebastian/environment/src/Runtime.php)"

# Sebastian Exporter
git add vendor/sebastian/exporter/src/Exporter.php && git commit -m "feat: création de l'utilitaire exporteur de variables (vendor/sebastian/exporter/src/Exporter.php)"

# Sebastian Global State
git add vendor/sebastian/global-state/src/CodeExporter.php && git commit -m "feat: ajout de l'exporteur de code pour l'état global (vendor/sebastian/global-state/src/CodeExporter.php)"
git add vendor/sebastian/global-state/src/ExcludeList.php && git commit -m "feat: implémentation de la liste d'exclusion pour l'état global (vendor/sebastian/global-state/src/ExcludeList.php)"
git add vendor/sebastian/global-state/src/Restorer.php && git commit -m "feat: création du restaurateur d'état global (vendor/sebastian/global-state/src/Restorer.php)"
git add vendor/sebastian/global-state/src/Snapshot.php && git commit -m "feat: ajout du snapshot d'état global (vendor/sebastian/global-state/src/Snapshot.php)"
git add vendor/sebastian/global-state/src/exceptions/Exception.php && git commit -m "feat: création de l'exception de base pour l'état global (vendor/sebastian/global-state/src/exceptions/Exception.php)"
git add vendor/sebastian/global-state/src/exceptions/RuntimeException.php && git commit -m "feat: ajout de l'exception runtime pour l'état global (vendor/sebastian/global-state/src/exceptions/RuntimeException.php)"

# Sebastian Lines of Code
git add vendor/sebastian/lines-of-code/src/Counter.php && git commit -m "feat: implement lines of code counter (vendor/sebastian/lines-of-code/src/Counter.php)"
git add vendor/sebastian/lines-of-code/src/LineCountingVisitor.php && git commit -m "feat: add line counting visitor (vendor/sebastian/lines-of-code/src/LineCountingVisitor.php)"
git add vendor/sebastian/lines-of-code/src/LinesOfCode.php && git commit -m "feat: create lines of code container (vendor/sebastian/lines-of-code/src/LinesOfCode.php)"
git add vendor/sebastian/lines-of-code/src/Exception/Exception.php && git commit -m "feat: add base exception for lines of code (vendor/sebastian/lines-of-code/src/Exception/Exception.php)"
git add vendor/sebastian/lines-of-code/src/Exception/IllogicalValuesException.php && git commit -m "feat: implement illogical values exception (vendor/sebastian/lines-of-code/src/Exception/IllogicalValuesException.php)"
git add vendor/sebastian/lines-of-code/src/Exception/NegativeValueException.php && git commit -m "feat: add negative value exception (vendor/sebastian/lines-of-code/src/Exception/NegativeValueException.php)"
git add vendor/sebastian/lines-of-code/src/Exception/RuntimeException.php && git commit -m "feat: create runtime exception for lines of code (vendor/sebastian/lines-of-code/src/Exception/RuntimeException.php)"

# Sebastian Object Enumerator
git add vendor/sebastian/object-enumerator/src/Enumerator.php && git commit -m "feat: implement object enumerator (vendor/sebastian/object-enumerator/src/Enumerator.php)"

# Sebastian Object Reflector
git add vendor/sebastian/object-reflector/src/ObjectReflector.php && git commit -m "feat: add object reflector utility (vendor/sebastian/object-reflector/src/ObjectReflector.php)"

# Sebastian Recursion Context
git add vendor/sebastian/recursion-context/src/Context.php && git commit -m "feat: create recursion context handler (vendor/sebastian/recursion-context/src/Context.php)"

# Sebastian Type
git add vendor/sebastian/type/src/Parameter.php && git commit -m "feat: add parameter type representation (vendor/sebastian/type/src/Parameter.php)"
git add vendor/sebastian/type/src/ReflectionMapper.php && git commit -m "feat: implement reflection mapper (vendor/sebastian/type/src/ReflectionMapper.php)"
git add vendor/sebastian/type/src/TypeName.php && git commit -m "feat: create type name utility (vendor/sebastian/type/src/TypeName.php)"
git add vendor/sebastian/type/src/exception/Exception.php && git commit -m "feat: add base exception for type package (vendor/sebastian/type/src/exception/Exception.php)"
git add vendor/sebastian/type/src/exception/RuntimeException.php && git commit -m "feat: implement runtime exception for type (vendor/sebastian/type/src/exception/RuntimeException.php)"

# Sebastian Type Classes
git add vendor/sebastian/type/src/type/CallableType.php && git commit -m "feat: add callable type representation (vendor/sebastian/type/src/type/CallableType.php)"
git add vendor/sebastian/type/src/type/FalseType.php && git commit -m "feat: create false type class (vendor/sebastian/type/src/type/FalseType.php)"
git add vendor/sebastian/type/src/type/GenericObjectType.php && git commit -m "feat: implement generic object type (vendor/sebastian/type/src/type/GenericObjectType.php)"
git add vendor/sebastian/type/src/type/IntersectionType.php && git commit -m "feat: add intersection type support (vendor/sebastian/type/src/type/IntersectionType.php)"
git add vendor/sebastian/type/src/type/IterableType.php && git commit -m "feat: create iterable type class (vendor/sebastian/type/src/type/IterableType.php)"
git add vendor/sebastian/type/src/type/MixedType.php && git commit -m "feat: implement mixed type (vendor/sebastian/type/src/type/MixedType.php)"
git add vendor/sebastian/type/src/type/NeverType.php && git commit -m "feat: add never type representation (vendor/sebastian/type/src/type/NeverType.php)"
git add vendor/sebastian/type/src/type/NullType.php && git commit -m "feat: create null type class (vendor/sebastian/type/src/type/NullType.php)"
git add vendor/sebastian/type/src/type/ObjectType.php && git commit -m "feat: implement object type (vendor/sebastian/type/src/type/ObjectType.php)"
git add vendor/sebastian/type/src/type/SimpleType.php && git commit -m "feat: add simple type base class (vendor/sebastian/type/src/type/SimpleType.php)"
git add vendor/sebastian/type/src/type/StaticType.php && git commit -m "feat: create static type representation (vendor/sebastian/type/src/type/StaticType.php)"
git add vendor/sebastian/type/src/type/TrueType.php && git commit -m "feat: implement true type class (vendor/sebastian/type/src/type/TrueType.php)"
git add vendor/sebastian/type/src/type/Type.php && git commit -m "feat: add base type interface (vendor/sebastian/type/src/type/Type.php)"
git add vendor/sebastian/type/src/type/UnionType.php && git commit -m "feat: create union type support (vendor/sebastian/type/src/type/UnionType.php)"
git add vendor/sebastian/type/src/type/UnknownType.php && git commit -m "feat: implement unknown type (vendor/sebastian/type/src/type/UnknownType.php)"
git add vendor/sebastian/type/src/type/VoidType.php && git commit -m "feat: add void type representation (vendor/sebastian/type/src/type/VoidType.php)"

# Sebastian Version
git add vendor/sebastian/version/src/Version.php && git commit -m "feat: create version utility class (vendor/sebastian/version/src/Version.php)"

# Staabm Side Effects Detector
git add vendor/staabm/side-effects-detector/lib/functionMetadata.php && git commit -m "feat: add function metadata for side effects (vendor/staabm/side-effects-detector/lib/functionMetadata.php)"
git add vendor/staabm/side-effects-detector/lib/SideEffect.php && git commit -m "feat: implement side effect representation (vendor/staabm/side-effects-detector/lib/SideEffect.php)"
git add vendor/staabm/side-effects-detector/lib/SideEffectsDetector.php && git commit -m "feat: create side effects detector (vendor/staabm/side-effects-detector/lib/SideEffectsDetector.php)"

# Symfony Clock
git add vendor/symfony/clock/ClockAwareTrait.php && git commit -m "feat: add clock aware trait (vendor/symfony/clock/ClockAwareTrait.php)"
git add vendor/symfony/clock/ClockInterface.php && git commit -m "feat: create clock interface (vendor/symfony/clock/ClockInterface.php)"
git add vendor/symfony/clock/Clock.php && git commit -m "feat: implement main clock class (vendor/symfony/clock/Clock.php)"
git add vendor/symfony/clock/DatePoint.php && git commit -m "feat: add date point representation (vendor/symfony/clock/DatePoint.php)"
git add vendor/symfony/clock/MockClock.php && git commit -m "feat: create mock clock for testing (vendor/symfony/clock/MockClock.php)"
git add vendor/symfony/clock/MonotonicClock.php && git commit -m "feat: implement monotonic clock (vendor/symfony/clock/MonotonicClock.php)"
git add vendor/symfony/clock/NativeClock.php && git commit -m "feat: add native clock implementation (vendor/symfony/clock/NativeClock.php)"
git add vendor/symfony/clock/Resources/now.php && git commit -m "feat: create now function resource (vendor/symfony/clock/Resources/now.php)"
git add vendor/symfony/clock/Test/ClockSensitiveTrait.php && git commit -m "feat: add clock sensitive trait for tests (vendor/symfony/clock/Test/ClockSensitiveTrait.php)"

# Symfony Console Core
git add vendor/symfony/console/Application.php && git commit -m "feat: implement console application (vendor/symfony/console/Application.php)"
git add vendor/symfony/console/ConsoleEvents.php && git commit -m "feat: define console events (vendor/symfony/console/ConsoleEvents.php)"
git add vendor/symfony/console/Cursor.php && git commit -m "feat: add cursor manipulation (vendor/symfony/console/Cursor.php)"
git add vendor/symfony/console/SingleCommandApplication.php && git commit -m "feat: create single command application (vendor/symfony/console/SingleCommandApplication.php)"
git add vendor/symfony/console/Terminal.php && git commit -m "feat: implement terminal utilities (vendor/symfony/console/Terminal.php)"
git add vendor/symfony/console/Color.php && git commit -m "feat: add color support for console (vendor/symfony/console/Color.php)"
git add vendor/symfony/console/SignalRegistry/SignalMap.php && git commit -m "feat: create signal map for console (vendor/symfony/console/SignalRegistry/SignalMap.php)"
git add vendor/symfony/console/SignalRegistry/SignalRegistry.php && git commit -m "feat: implement signal registry (vendor/symfony/console/SignalRegistry/SignalRegistry.php)"

echo "Tous les commits ont été créés avec succès!"